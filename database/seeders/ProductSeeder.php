<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Apple AirPods Pro',
                'description' => 'The Apple AirPods Pro are wireless earbuds with active noise cancellation, transparency mode, and a customizable fit.',
                'price' => 249,
                'image' => 'https://m.media-amazon.com/images/I/61SUj2aKoEL._AC_SL1500_.jpg',
            ],
            [
                'name' => 'Bose QuietComfort 35 II',
                'description' => 'The Bose QuietComfort 35 II are wireless headphones with noise cancellation, Alexa voice control, and a comfortable fit.',
                'price' => 299,
                'image' => 'https://m.media-amazon.com/images/I/61PzLRRxRbL._AC_SL1000_.jpg',
            ],
            [
                'name' => 'Sony WH-1000XM4',
                'description' => 'The Sony WH-1000XM4 are wireless headphones with noise cancellation, Alexa voice control, and a comfortable fit.',
                'price' => 348,
                'image' => 'https://m.media-amazon.com/images/I/51DkbWZIg+L._AC_SL1500_.jpg',
            ],
            [
                'name' => 'Jabra Elite Active 75t',
                'description' => 'The Jabra Elite Active 75t are wireless earbuds with noise cancellation, a waterproof design, and a comfortable fit.',
                'price' => 179,
                'image' => 'https://m.media-amazon.com/images/I/610K5CYx6fL._AC_SL1400_.jpg',
            ],
            [
                'name' => 'Samsung Galaxy Buds Pro',
                'description' => 'The Samsung Galaxy Buds Pro are wireless earbuds with noise cancellation, a waterproof design, and a comfortable fit.',
                'price' => 199,
                'image' => 'https://m.media-amazon.com/images/I/61ReFn+YL1L._AC_SL1500_.jpg',
            ],
            [
                'name' => 'Fitbit Versa 3 Health & Fitness Smartwatch',
                'description' => 'Built-in GPS for distance tracking and continuous heart rate monitoring. Water resistant up to 50 meters. Over 6 days of battery life.',
                'price' => 229.95,
                'image' => 'https://m.media-amazon.com/images/I/5119d-IDGWL._AC_SL1000_.jpg',
            ],
            [
                'name' => 'Quaker Oats Old Fashioned Rolled Oats',
                'description' => '100% whole grain oats, perfect for oatmeal, baking, and cooking',
                'price' => 4.48,
                'image' => 'https://m.media-amazon.com/images/I/91RUmwBDIzS._SL1500_.jpg',
            ],
            [
                'name' => 'Folgers Classic Roast Ground Coffee',
                'description' => '100% Arabica coffee, perfect for brewing at home',
                'price' => 3.48,
                'image' => 'https://m.media-amazon.com/images/I/81EAhASuENL._SL1500_.jpg',
            ],
            [
                'name' => 'Kellogg\'s Frosted Flakes Cereal',
                'description' => 'Crunchy and sweet cereal, perfect for breakfast',
                'price' => 2.98,
                'image' => 'https://m.media-amazon.com/images/I/811My75BQYL._SL1500_.jpg',
            ],
            [
                'name' => 'Pepsi Zero Sugar, 12 Pack',
                'description' => 'Zero calorie, zero sugar, and zero artificial flavors',
                'price' => 10.99,
                'image' => 'https://m.media-amazon.com/images/I/81ufXEkSRVL._SL1500_.jpg',
            ],
            [
                'name' => 'Doritos Nacho Cheese Tortilla Chips',
                'description' => 'Crunchy and flavorful tortilla chips, perfect for snacking',
                'price' => 3.98,
                'image' => 'https://m.media-amazon.com/images/I/81uFLdbkpGL._SL1500_.jpg',
            ],
            [
                'name' => 'Amazon Essentials Men\'s Classic Fit Short-Sleeve T-Shirt',
                'description' => 'Soft and comfortable t-shirt, perfect for casual wear',
                'price' => 7.90,
                'image' => 'https://m.media-amazon.com/images/I/81YOGkuoDiS._AC_SY550_.jpg',
            ],
            [
                'name' => 'Levi\'s Men\'s 501 Original Fit Jeans',
                'description' => 'Classic and stylish jeans, perfect for casual wear',
                'price' => 58.00,
                'image' => 'https://m.media-amazon.com/images/I/61Oqtc0XA9L._AC_SX569_.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
