<?php

namespace Database\Factories;

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
            'name' => 'Apple AirPods Pro',
            'description' => 'The Apple AirPods Pro are wireless earbuds with active noise cancellation, transparency mode, and a customizable fit.',
            'price' => 249,
            'image' => 'https://m.media-amazon.com/images/I/61SUj2aKoEL._AC_SL1500_.jpg',
        ];
    }
}
