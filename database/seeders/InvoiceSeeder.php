<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $invoices = [
            [
                'invoice_number' => 'INV-0001',
                'invoice_date' => '2022-01-01',
                'customer_information' => [
                    'name' => 'John Doe',
                    'address' => '123 Main St, Anytown, USA',
                    'email' => 'john.doe@example.com',
                    'phone' => '123-456-7890',
                ],
                'supplier_information' => [
                    'name' => 'Amazon',
                    'address' => '1200 12th Ave, Seattle, WA 98122, USA',
                    'email' => 'support@amazon.com',
                    'phone' => '206-922-0880',
                ],
                'products' => [
                    [
                        'product_id' => 1,
                        'quantity' => 1,
                        'price' => 249,
                    ],
                    [
                        'product_id' => 2,
                        'quantity' => 2,
                        'price' => 299,
                    ],
                ],
                'total_amount' => 797,
                'tax_information' => [
                    'tax_rate' => 0.08,
                    'tax_amount' => 63.76,
                ],
            ],
            [
                'invoice_number' => 'INV-0002',
                'invoice_date' => '2022-01-02',
                'customer_information' => [
                    'name' => 'Jane Smith',
                    'address' => '456 Elm St, Anytown, USA',
                    'email' => 'jane.smith@example.com',
                    'phone' => '123-456-7890',
                ],
                'supplier_information' => [
                    'name' => 'Amazon',
                    'address' => '1200 12th Ave, Seattle, WA 98122, USA',
                    'email' => 'support@amazon.com',
                    'phone' => '206-922-0880',
                ],
                'products' => [
                    [
                        'product_id' => 3,
                        'quantity' => 3,
                        'price' => 4.48,
                    ],
                    [
                        'product_id' => 4,
                        'quantity' => 4,
                        'price' => 3.48,
                    ],
                ],
                'total_amount' => 21.92,
                'tax_information' => [
                    'tax_rate' => 0.08,
                    'tax_amount' => 1.75,
                ],
            ],
            [
                'invoice_number' => 'INV-0003',
                'invoice_date' => '2022-01-03',
                'customer_information' => [
                    'name' => 'Bob Johnson',
                    'address' => '789 Oak St, Anytown, USA',
                    'email' => 'bob.johnson@example.com',
                    'phone' => '123-456-7890',
                ],
                'supplier_information' => [
                    'name' => 'Amazon',
                    'address' => '1200 12th Ave, Seattle, WA 98122, USA',
                    'email' => 'support@amazon.com',
                    'phone' => '206-922-0880',
                ],
                'products' => [
                    [
                        'product_id' => 5,
                        'quantity' => 5,
                        'price' => 19.99,
                    ],
                    [
                        'product_id' => 6,
                        'quantity' => 6,
                        'price' => 14.99,
                    ],
                ],
                'total_amount' => 149.94,
                'tax_information' => [
                    'tax_rate' => 0.08,
                    'tax_amount' => 12.00,
                ],
            ],
            [
                'invoice_number' => 'INV-0004',
                'invoice_date' => '2022-01-04',
                'customer_information' => [
                    'name' => 'Sarah Lee',
                    'address' => '321 Maple St, Anytown, USA',
                    'email' => 'sarah.lee@example.com',
                    'phone' => '123-456-7890',
                ],
                'supplier_information' => [
                    'name' => 'Amazon',
                    'address' => '1200 12th Ave, Seattle, WA 98122, USA',
                    'email' => 'support@amazon.com',
                    'phone' => '206-922-0880',
                ],
                'products' => [
                    [
                        'product_id' => 7,
                        'quantity' => 7,
                        'price' => 29.99,
                    ],
                    [
                        'product_id' => 8,
                        'quantity' => 8,
                        'price' => 24.99,
                    ],
                ],
                'total_amount' => 349.92,
                'tax_information' => [
                    'tax_rate' => 0.08,
                    'tax_amount' => 27.99,
                ],
            ],
            [
                'invoice_number' => 'INV-0005',
                'invoice_date' => '2022-01-05',
                'customer_information' => [
                    'name' => 'Michael Chen',
                    'address' => '654 Pine St, Anytown, USA',
                    'email' => 'michael.chen@example.com',
                    'phone' => '123-456-7890',
                ],
                'supplier_information' => [
                    'name' => 'Amazon',
                    'address' => '1200 12th Ave, Seattle, WA 98122, USA',
                    'email' => 'support@amazon.com',
                    'phone' => '206-922-0880',
                ],
                'products' => [
                    [
                        'product_id' => 9,
                        'quantity' => 9,
                        'price' => 39.99,
                    ],
                    [
                        'product_id' => 10,
                        'quantity' => 10,
                        'price' => 34.99,
                    ],
                ],
                'total_amount' => 589.89,
                'tax_information' => [
                    'tax_rate' => 0.08,
                    'tax_amount' => 47.19,
                ],
            ],
            [
                'invoice_number' => 'INV-0006',
                'invoice_date' => '2022-01-06',
                'customer_information' => [
                    'name' => 'Emily Wong',
                    'address' => '987 Birch St, Anytown, USA',
                    'email' => 'emily.wong@example.com',
                    'phone' => '123-456-7890',
                ],
                'supplier_information' => [
                    'name' => 'Amazon',
                    'address' => '1200 12th Ave, Seattle, WA 98122, USA',
                    'email' => 'support@amazon.com',
                    'phone' => '206-922-0880',
                ],
                'products' => [
                    [
                        'product_id' => 11,
                        'quantity' => 11,
                        'price' => 49.99,
                    ],
                    [
                        'product_id' => 12,
                        'quantity' => 12,
                        'price' => 44.99,
                    ],
                ],
                'total_amount' => 839.88,
                'tax_information' => [
                    'tax_rate' => 0.08,
                    'tax_amount' => 67.19,
                ],
            ],
            [
                'invoice_number' => 'INV-0007',
                'invoice_date' => '2022-01-07',
                'customer_information' => [
                    'name' => 'Daniel Kim',
                    'address' => '135 Cedar St, Anytown, USA',
                    'email' => 'daniel.kim@example.com',
                    'phone' => '123-456-7890',
                ],
                'supplier_information' => [
                    'name' => 'Amazon',
                    'address' => '1200 12th Ave, Seattle, WA 98122, USA',
                    'email' => 'support@amazon.com',
                    'phone' => '206-922-0880',
                ],
                'products' => [
                    [
                        'product_id' => 13,
                        'quantity' => 13,
                        'price' => 59.99,
                    ],
                    [
                        'product_id' => 14,
                        'quantity' => 14,
                        'price' => 54.99,
                    ],
                ],
                'total_amount' => 1119.86,
                'tax_information' => [
                    'tax_rate' => 0.08,
                    'tax_amount' => 89.59,
                ],
            ],
            [
                'invoice_number' => 'INV-0008',
                'invoice_date' => '2022-01-08',
                'customer_information' => [
                    'name' => 'Grace Lee',
                    'address' => '246 Cherry St, Anytown, USA',
                    'email' => 'grace.lee@example.com',
                    'phone' => '123-456-7890',
                ],
                'supplier_information' => [
                    'name' => 'Amazon',
                    'address' => '1200 12th Ave, Seattle, WA 98122, USA',
                    'email' => 'support@amazon.com',
                    'phone' => '206-922-0880',
                ],
                'products' => [
                    [
                        'product_id' => 15,
                        'quantity' => 15,
                        'price' => 69.99,
                    ],
                    [
                        'product_id' => 16,
                        'quantity' => 16,
                        'price' => 64.99,
                    ],
                ],
                'total_amount' => 1439.84,
                'tax_information' => [
                    'tax_rate' => 0.08,
                    'tax_amount' => 115.19,
                ],
            ],
            [
                'invoice_number' => 'INV-0009',
                'invoice_date' => '2022-01-09',
                'customer_information' => [
                    'name' => 'Andrew Park',
                    'address' => '369 Walnut St, Anytown, USA',
                    'email' => 'andrew.park@example.com',
                    'phone' => '123-456-7890',
                ],
                'supplier_information' => [
                    'name' => 'Amazon',
                    'address' => '1200 12th Ave, Seattle, WA 98122, USA',
                    'email' => 'support@amazon.com',
                    'phone' => '206-922-0880',
                ],
                'products' => [
                    [
                        'product_id' => 17,
                        'quantity' => 17,
                        'price' => 79.99,
                    ],
                    [
                        'product_id' => 18,
                        'quantity' => 18,
                        'price' => 74.99,
                    ],
                ],
                'total_amount' => 1759.82,
                'tax_information' => [
                    'tax_rate' => 0.08,
                    'tax_amount' => 140.79,
                ],
            ],
            [
                'invoice_number' => 'INV-0010',
                'invoice_date' => '2022-01-10',
                'customer_information' => [
                    'name' => 'Jessica Kim',
                    'address' => '491 Orange St, Anytown, USA',
                    'email' => 'jessica.kim@example.com',
                    'phone' => '123-456-7890',
                ],
                'supplier_information' => [
                    'name' => 'Amazon',
                    'address' => '1200 12th Ave, Seattle, WA 98122, USA',
                    'email' => 'support@amazon.com',
                    'phone' => '206-922-0880',
                ],
                'products' => [
                    [
                        'product_id' => 19,
                        'quantity' => 19,
                        'price' => 89.99,
                    ],
                    [
                        'product_id' => 20,
                        'quantity' => 20,
                        'price' => 84.99,
                    ],
                ],
                'total_amount' => 2179.80,
                'tax_information' => [
                    'tax_rate' => 0.08,
                    'tax_amount' => 174.39,
                ],
            ],
        ];

        foreach ($invoices as $invoice) {
            $invoiceModel = Invoice::create([
                'invoice_number' => $invoice['invoice_number'],
                'invoice_date' => $invoice['invoice_date'],
                'customer_information' => $invoice['customer_information'],
                'supplier_information' => $invoice['supplier_information'],
                'total_amount' => $invoice['total_amount'],
                'tax_information' => $invoice['tax_information'],
            ]);

            foreach ($invoice['products'] as $product) {
                $invoiceModel->products()->attach($product['product_id'], [
                    'quantity' => $product['quantity'],
                    'price' => $product['price'],
                ]);
            }
        }
    }
}
