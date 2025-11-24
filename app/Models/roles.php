<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    /**
     * Get all users with this role
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * Check if role is admin
     */
    public function isAdmin(): bool
    {
        return $this->name === 'admin';
    }

    /**
     * Check if role is kasir
     */
    public function isKasir(): bool
    {
        return $this->name === 'kasir';
    }

    /**
     * Check if role is customer
     */
    public function isCustomer(): bool
    {
        return $this->name === 'customer';
    }
}
