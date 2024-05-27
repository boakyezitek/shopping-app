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
        try {
            /**
             * Fetches the latest 10 products from the remote API.
             */
            $products = Product::query()->latest()->paginate(10);

            /**
             * Returns the products as a JSON response.
             */
            return ProductResource::collection($products);
        } catch (\Exception $e) {
            /**
             * Returns an error message and a 500 status code if an exception is thrown.
             */
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        try {
            /**
             * Fetches the specified product from the remote API.
             */
            return ProductResource::make($product);
        } catch (\Exception $e) {
            /**
             * Returns an error message and a 500 status code if an exception is thrown.
             */
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
