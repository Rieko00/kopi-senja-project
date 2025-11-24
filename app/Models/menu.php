<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class menu extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id',
        'is_available',
        'stock'
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'is_available' => 'boolean',
            'stock' => 'integer'
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(categories::class);
    }

    /**
     * Get order items for this menu
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(detail_orders::class);
    }


    /**
     * Scope for available menus
     */
    public function scopeAvailable(Builder $query): Builder
    {
        return $query->where('is_available', true);
    }

    /**
     * Scope for in stock menus
     */
    public function scopeInStock(Builder $query): Builder
    {
        return $query->where('stock', '>', 0);
    }

    /**
     * Scope for category filter
     */
    public function scopeByCategory(Builder $query, $categoryId): Builder
    {
        return $query->where('category_id', $categoryId);
    }

    /**
     * Get formatted price
     */
    public function getFormattedPriceAttribute(): string
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }

    /**
     * Check if menu is in stock
     */
    public function isInStock(): bool
    {
        return $this->stock > 0;
    }

    /**
     * Reduce stock when ordered
     */
    public function reduceStock(int $quantity): bool
    {
        if ($this->stock >= $quantity) {
            $this->decrement('stock', $quantity);
            return true;
        }
        return false;
    }

    /**
     * Restore stock when order cancelled
     */
    public function restoreStock(int $quantity): void
    {
        $this->increment('stock', $quantity);
    }
}
