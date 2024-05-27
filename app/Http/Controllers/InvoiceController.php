<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Http\Resources\InvoiceResource;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            /**
             * Fetches the latest 10 invoices from the remote API and includes the related products.
             */
            $invoices = Invoice::query()->with('products')->latest()->paginate(10);

            /**
             * Returns the invoices as a JSON response.
             */
            return InvoiceResource::collection($invoices);
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
    public function show(Invoice $invoice)
    {
        try {
            /**
             * Fetches the specified invoice and includes the related products.
             */
            return InvoiceResource::make($invoice->load('products'));
        } catch (\Exception $e) {
            /**
             * Returns an error message and a 500 status code if an exception is thrown.
             */
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
