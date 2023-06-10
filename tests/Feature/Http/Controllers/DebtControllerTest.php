<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Debt;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\DebtController
 */
class DebtControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $debts = Debt::factory()->count(3)->create();

        $response = $this->get(route('debt.index'));

        $response->assertOk();
        $response->assertViewIs('debt.index');
        $response->assertViewHas('debts');
    }


    /**
     * @test
     */
    public function create_displays_view(): void
    {
        $response = $this->get(route('debt.create'));

        $response->assertOk();
        $response->assertViewIs('debt.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\DebtController::class,
            'store',
            \App\Http\Requests\DebtStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects(): void
    {
        $customer_name = $this->faker->word;
        $description = $this->faker->text;
        $leave = $this->faker->randomFloat(/** float_attributes **/);
        $subtract = $this->faker->randomFloat(/** float_attributes **/);
        $total = $this->faker->randomFloat(/** double_attributes **/);
        $id_product = $this->faker->word;

        $response = $this->post(route('debt.store'), [
            'customer_name' => $customer_name,
            'description' => $description,
            'leave' => $leave,
            'subtract' => $subtract,
            'total' => $total,
            'id_product' => $id_product,
        ]);

        $debts = Debt::query()
            ->where('customer_name', $customer_name)
            ->where('description', $description)
            ->where('leave', $leave)
            ->where('subtract', $subtract)
            ->where('total', $total)
            ->where('id_product', $id_product)
            ->get();
        $this->assertCount(1, $debts);
        $debt = $debts->first();

        $response->assertRedirect(route('debt.index'));
        $response->assertSessionHas('debt.id', $debt->id);
    }


    /**
     * @test
     */
    public function show_displays_view(): void
    {
        $debt = Debt::factory()->create();

        $response = $this->get(route('debt.show', $debt));

        $response->assertOk();
        $response->assertViewIs('debt.show');
        $response->assertViewHas('debt');
    }


    /**
     * @test
     */
    public function edit_displays_view(): void
    {
        $debt = Debt::factory()->create();

        $response = $this->get(route('debt.edit', $debt));

        $response->assertOk();
        $response->assertViewIs('debt.edit');
        $response->assertViewHas('debt');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\DebtController::class,
            'update',
            \App\Http\Requests\DebtUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects(): void
    {
        $debt = Debt::factory()->create();
        $customer_name = $this->faker->word;
        $description = $this->faker->text;
        $leave = $this->faker->randomFloat(/** float_attributes **/);
        $subtract = $this->faker->randomFloat(/** float_attributes **/);
        $total = $this->faker->randomFloat(/** double_attributes **/);
        $id_product = $this->faker->word;

        $response = $this->put(route('debt.update', $debt), [
            'customer_name' => $customer_name,
            'description' => $description,
            'leave' => $leave,
            'subtract' => $subtract,
            'total' => $total,
            'id_product' => $id_product,
        ]);

        $debt->refresh();

        $response->assertRedirect(route('debt.index'));
        $response->assertSessionHas('debt.id', $debt->id);

        $this->assertEquals($customer_name, $debt->customer_name);
        $this->assertEquals($description, $debt->description);
        $this->assertEquals($leave, $debt->leave);
        $this->assertEquals($subtract, $debt->subtract);
        $this->assertEquals($total, $debt->total);
        $this->assertEquals($id_product, $debt->id_product);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects(): void
    {
        $debt = Debt::factory()->create();

        $response = $this->delete(route('debt.destroy', $debt));

        $response->assertRedirect(route('debt.index'));

        $this->assertModelMissing($debt);
    }
}
