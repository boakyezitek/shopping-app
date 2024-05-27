<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::apiResource('products', ProductController::class)->only(['index', 'show']);
Route::apiResource('invoices', InvoiceController::class)->only(['index', 'show']);
