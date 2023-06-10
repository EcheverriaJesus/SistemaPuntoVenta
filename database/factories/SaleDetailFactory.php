<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Sale_detail;

class SaleDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SaleDetail::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'amout' => $this->faker->numberBetween(-10000, 10000),
            'subtotal' => $this->faker->randomFloat(0, 0, 9999999999.),
            'total' => $this->faker->randomFloat(0, 0, 9999999999.),
            'id_sale_detail' => $this->faker->word,
            'id_product' => $this->faker->word,
        ];
    }
}
