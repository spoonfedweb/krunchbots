<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([
                'shirt',
                'cap',
                'socks',
                'sunglasses',
                'mug',
                'remote control accessory',
                'laptop',
                'wallet (cold)',
                'wallet (hot)',
            ]),
            'description' => $this->faker->sentence(),
            'price_range_min' => $this->faker->numberBetween(5, 20000),
            'price_range_max' => $this->faker->numberBetween(20000, 80000000),
        ];
    }
}
