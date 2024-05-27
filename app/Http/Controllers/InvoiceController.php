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
        $invoices = Invoice::query('products')->with('')->latest()->paginate(10);

        return InvoiceResource::collection($invoices);
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        return InvoiceResource::make($invoice->load('products'));
    }
}
