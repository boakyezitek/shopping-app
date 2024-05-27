<?php

namespace Tests\Feature;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_can_display_a_list_of_products()
    {
        $products = Product::factory()->create();

        $response = $this->getJson('/api/products');

        $response->assertStatus(200);
        // $response->assertJsonResourceCollection(ProductResource::collection($products), 'data');
    }

    public function test_can_show_a_single_product()
    {
        $product = Product::factory()->create([
            'name' => 'Apple AirPods Pro',
            'description' => 'The Apple AirPods Pro are wireless earbuds with active noise cancellation, transparency mode, and a customizable fit.',
            'price' => 249,
            'image' => 'https://m.media-amazon.com/images/I/61SUj2aKoEL._AC_SL1500_.jpg',
        ]);

        $response = $this->getJson('/api/products/'.$product->id);

        $response->assertStatus(200);
        // $response->assertJsonResource(ProductResource::make($product));
    }
}
