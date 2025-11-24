<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;


class categories extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'is_active'
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean'
        ];
    }


    public function menus(): HasMany
    {
        return $this->hasMany(menu::class);
    }

    /**
     * Get only available menus
     */
    public function availableMenus(): HasMany
    {
        return $this->menus()->where('is_available', true);
    }

    /**
     * Scope for active categories
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Get menus count in this category
     */
    public function getMenusCountAttribute(): int
    {
        return $this->menus()->count();
    }

    /**
     * Get available menus count
     */
    public function getAvailableMenusCountAttribute(): int
    {
        return $this->availableMenus()->count();
    }
}
