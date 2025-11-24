<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'customer_id',
        'kasir_id',
        'subtotal',
        'total_amount',
        'status',
        'order_type',
        'customer_name',
        'customer_phone',
        'notes',
        'order_date',
        'estimated_ready_time'
    ];

    protected function casts(): array
    {
        return [
            'subtotal' => 'decimal:2',
            'total_amount' => 'decimal:2',
            'order_date' => 'datetime',
            'estimated_ready_time' => 'datetime'
        ];
    }
    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    /**
     * Get the kasir who processed this order
     */
    public function kasir(): BelongsTo
    {
        return $this->belongsTo(User::class, 'kasir_id');
    }

    /**
     * Get order items
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(detail_orders::class);
    }

    /**
     * Get payment for this order
     */
    public function payment(): HasOne
    {
        return $this->hasOne(payments::class);
    }

    /**
     * Scope for status filter
     */
    public function scopeByStatus(Builder $query, string $status): Builder
    {
        return $query->where('status', $status);
    }

    /**
     * Scope for order type filter
     */
    public function scopeByType(Builder $query, string $type): Builder
    {
        return $query->where('order_type', $type);
    }

    /**
     * Scope for today's orders
     */
    public function scopeToday(Builder $query): Builder
    {
        return $query->whereDate('order_date', today());
    }

    /**
     * Scope for date range
     */
    public function scopeDateRange(Builder $query, $startDate, $endDate): Builder
    {
        return $query->whereBetween('order_date', [$startDate, $endDate]);
    }

    /**
     * Generate unique order number
     */
    public static function generateOrderNumber(): string
    {
        $date = now()->format('Ymd');
        $lastOrder = static::whereDate('created_at', today())
            ->orderBy('id', 'desc')
            ->first();

        $sequence = $lastOrder ? (int) substr($lastOrder->order_number, -3) + 1 : 1;

        return 'KS' . $date . str_pad($sequence, 3, '0', STR_PAD_LEFT);
    }

    /**
     * Get formatted total amount
     */
    public function getFormattedTotalAttribute(): string
    {
        return 'Rp ' . number_format($this->total_amount, 0, ',', '.');
    }

    /**
     * Get customer display name
     */
    public function getCustomerDisplayNameAttribute(): string
    {
        return $this->customer_name ?? $this->customer?->name ?? 'Guest';
    }

    /**
     * Check if order is paid
     */
    public function isPaid(): bool
    {
        return $this->payment?->status === 'paid';
    }

    /**
     * Check if order can be cancelled
     */
    public function canBeCancelled(): bool
    {
        return in_array($this->status, ['pending', 'confirmed']);
    }

    /**
     * Get status badge color
     */
    public function getStatusColorAttribute(): string
    {
        return match ($this->status) {
            'pending' => 'yellow',
            'confirmed' => 'blue',
            'preparing' => 'orange',
            'ready' => 'green',
            'completed' => 'gray',
            'cancelled' => 'red',
            default => 'gray'
        };
    }
}
