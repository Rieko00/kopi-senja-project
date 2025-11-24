<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class payment_logs extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'event_type',
        'transaction_status',
        'raw_data',
        'is_processed',
        'notes'
    ];

    protected function casts(): array
    {
        return [
            'raw_data' => 'array',
            'is_processed' => 'boolean'
        ];
    }

    /**
     * Get the payment this log belongs to
     */
    public function payment(): BelongsTo
    {
        return $this->belongsTo(payments::class);
    }

    /**
     * Mark log as processed
     */
    public function markAsProcessed(string $notes = null): bool
    {
        $this->is_processed = true;
        if ($notes) {
            $this->notes = $notes;
        }
        return $this->save();
    }
}
