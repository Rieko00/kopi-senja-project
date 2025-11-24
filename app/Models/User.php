<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role_id',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function role(): BelongsTo
    {
        return $this->belongsTo(roles::class);
    }

    /**
     * Get orders where user is customer
     */
    public function customerOrders(): HasMany
    {
        return $this->hasMany(orders::class, 'customer_id');
    }

    /**
     * Get orders where user is kasir
     */
    public function kasirOrders(): HasMany
    {
        return $this->hasMany(orders::class, 'kasir_id');
    }

    /**
     * Check if user is admin
     */
    public function isAdmin(): bool
    {
        return $this->role?->name === 'admin';
    }

    /**
     * Check if user is kasir
     */
    public function isKasir(): bool
    {
        return $this->role?->name === 'kasir';
    }

    /**
     * Check if user is customer
     */
    public function isCustomer(): bool
    {
        return $this->role?->name === 'customer';
    }

    /**
     * Get user's role name
     */
    public function getRoleName(): string
    {
        return $this->role?->name ?? 'customer';
    }
}
