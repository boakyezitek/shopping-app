<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    /**
     * The fillable properties for the Invoice model.
     */
    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'customer_information',
        'supplier_information',
        'total_amount',
        'tax_information',
    ];

    /**
     * The customer information attribute.
     *
     * @var Attribute
     */
    protected function customerInformation(): Attribute {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value)
        );
    }

    /**
     * The supplier information attribute.
     *
     * @var Attribute
     */
    protected function supplierInformation(): Attribute {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value)
        );
    }

    /**
     * The tax information attribute.
     *
     * @var Attribute
     */
    protected function taxInformation(): Attribute {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value)
        );
    }

    /**
     * The products relationship for the Invoice model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'invoice_items')->withPivot('quantity', 'price');
    }
}
