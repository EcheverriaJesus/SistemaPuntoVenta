<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_name' => $this->faker->regexify('[A-Za-z0-9]{50}'),
            'direction' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'number_phone' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'delivery_date' => $this->faker->date(),
            'leave' => $this->faker->randomFloat(0, 0, 9999999999.),
            'subtract' => $this->faker->randomFloat(0, 0, 9999999999.),
            'description' => $this->faker->text,
            'total' => $this->faker->randomFloat(0, 0, 9999999999.),
            'id_product' => $this->faker->word,
        ];
    }
}
