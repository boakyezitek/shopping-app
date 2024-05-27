<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get the latest 10 products from the database
        $products = Product::query()->latest()->paginate(10);

        // Return the products as a JSON response
        return ProductResource::collection($products);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // Return the specified product as a JSON response
        return ProductResource::make($product);
    }

}
