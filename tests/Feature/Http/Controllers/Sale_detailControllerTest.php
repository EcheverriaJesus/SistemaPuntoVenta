<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\SaleDetail;
use App\Models\Sale_detail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Sale_detailController
 */
class Sale_detailControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view(): void
    {
        $saleDetails = Sale_detail::factory()->count(3)->create();

        $response = $this->get(route('sale_detail.index'));

        $response->assertOk();
        $response->assertViewIs('saleDetail.index');
        $response->assertViewHas('saleDetails');
    }


    /**
     * @test
     */
    public function create_displays_view(): void
    {
        $response = $this->get(route('sale_detail.create'));

        $response->assertOk();
        $response->assertViewIs('saleDetail.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Sale_detailController::class,
            'store',
            \App\Http\Requests\Sale_detailStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects(): void
    {
        $response = $this->post(route('sale_detail.store'));

        $response->assertRedirect(route('saleDetail.index'));
        $response->assertSessionHas('saleDetail.id', $saleDetail->id);

        $this->assertDatabaseHas(saleDetails, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view(): void
    {
        $saleDetail = Sale_detail::factory()->create();

        $response = $this->get(route('sale_detail.show', $saleDetail));

        $response->assertOk();
        $response->assertViewIs('saleDetail.show');
        $response->assertViewHas('saleDetail');
    }


    /**
     * @test
     */
    public function edit_displays_view(): void
    {
        $saleDetail = Sale_detail::factory()->create();

        $response = $this->get(route('sale_detail.edit', $saleDetail));

        $response->assertOk();
        $response->assertViewIs('saleDetail.edit');
        $response->assertViewHas('saleDetail');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\Sale_detailController::class,
            'update',
            \App\Http\Requests\Sale_detailUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects(): void
    {
        $saleDetail = Sale_detail::factory()->create();

        $response = $this->put(route('sale_detail.update', $saleDetail));

        $saleDetail->refresh();

        $response->assertRedirect(route('saleDetail.index'));
        $response->assertSessionHas('saleDetail.id', $saleDetail->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects(): void
    {
        $saleDetail = Sale_detail::factory()->create();
        $saleDetail = SaleDetail::factory()->create();

        $response = $this->delete(route('sale_detail.destroy', $saleDetail));

        $response->assertRedirect(route('saleDetail.index'));

        $this->assertModelMissing($saleDetail);
    }
}
