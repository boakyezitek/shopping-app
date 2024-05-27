<?php

namespace Tests\Feature;

use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class InvoiceTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function it_can_display_a_list_of_invoices()
    {
        $invoices = Invoice::factory()->count(5)->create();

        $response = $this->getJson(route('invoices.index'));

        $response->assertStatus(200);
        $response->assertJsonResourceCollection(InvoiceResource::collection($invoices), 'data');
    }

    public function it_can_display_a_single_invoice()
    {
        $invoice = Invoice::factory()->create();
        $product = Product::factory()->create();
        $invoice->products()->attach($product, ['quantity' => 2, 'price' => 10]);

        $response = $this->getJson(route('invoices.show', $invoice));

        $response->assertStatus(200);
        $response->assertJsonResource(InvoiceResource::make($invoice->load('products')));
    }
}
