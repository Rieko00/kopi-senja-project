<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'payment_id',
        'payment_method',
        'amount',
        'paid_amount',
        'change_amount',
        'status',
        'midtrans_transaction_id',
        'midtrans_order_id',
        'snap_token',
        'midtrans_response',
        'qris_string',
        'notes',
        'paid_at',
        'expired_at'
    ];

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'paid_amount' => 'decimal:2',
            'change_amount' => 'decimal:2',
            'midtrans_response' => 'array',
            'paid_at' => 'datetime',
            'expired_at' => 'datetime'
        ];
    }

    /**
     * Get the order this payment belongs to
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(orders::class);
    }

    /**
     * Get payment logs
     */
    public function paymentLogs(): HasMany
    {
        return $this->hasMany(payment_logs::class);
    }

    /**
     * Scope for payment method
     */
    public function scopeByMethod(Builder $query, string $method): Builder
    {
        return $query->where('payment_method', $method);
    }

    /**
     * Scope for status
     */
    public function scopeByStatus(Builder $query, string $status): Builder
    {
        return $query->where('status', $status);
    }

    /**
     * Generate unique payment ID
     */
    public static function generatePaymentId(): string
    {
        return 'PAY' . now()->format('YmdHis') . random_int(1000, 9999);
    }

    /**
     * Check if payment is cash
     */
    public function isCash(): bool
    {
        return $this->payment_method === 'cash';
    }

    /**
     * Check if payment is QRIS
     */
    public function isQris(): bool
    {
        return $this->payment_method === 'qris';
    }

    /**
     * Check if payment is successful
     */
    public function isSuccessful(): bool
    {
        return $this->status === 'paid';
    }

    /**
     * Check if payment is pending
     */
    public function isPending(): bool
    {
        return $this->status === 'pending';
    }

    /**
     * Get formatted amount
     */
    public function getFormattedAmountAttribute(): string
    {
        return 'Rp ' . number_format($this->amount, 0, ',', '.');
    }

    /**
     * Get status badge color
     */
    public function getStatusColorAttribute(): string
    {
        return match ($this->status) {
            'pending' => 'yellow',
            'paid' => 'green',
            'failed' => 'red',
            'cancelled' => 'gray',
            default => 'gray'
        };
    }
}
