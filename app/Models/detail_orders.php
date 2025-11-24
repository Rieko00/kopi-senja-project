<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class detail_orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'menu_id',
        'menu_name',
        'menu_price',
        'quantity',
        'subtotal',
        'notes'
    ];

    protected function casts(): array
    {
        return [
            'menu_price' => 'decimal:2',
            'subtotal' => 'decimal:2',
            'quantity' => 'integer'
        ];
    }

    /**
     * Get the order this item belongs to
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(orders::class);
    }

    /**
     * Get the menu item
     */
    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    /**
     * Get formatted price
     */
    public function getFormattedPriceAttribute(): string
    {
        return 'Rp ' . number_format($this->menu_price, 0, ',', '.');
    }

    /**
     * Get formatted subtotal
     */
    public function getFormattedSubtotalAttribute(): string
    {
        return 'Rp ' . number_format($this->subtotal, 0, ',', '.');
    }

    /**
     * Calculate subtotal automatically
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($orderItem) {
            $orderItem->subtotal = $orderItem->quantity * $orderItem->menu_price;
        });

        static::updating(function ($orderItem) {
            if ($orderItem->isDirty(['quantity', 'menu_price'])) {
                $orderItem->subtotal = $orderItem->quantity * $orderItem->menu_price;
            }
        });
    }
}
