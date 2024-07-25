<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessService extends Model
{
    use HasFactory;

    protected $table = 'business_services';

    /**
     * Get the services filtered by category.
     * This is optional, only if you need a specific method to retrieve by category.
     *
     * @param string $category
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function scopeByCategory($query, string $category): \Illuminate\Database\Eloquent\Builder
    {
        return $query->where('category', $category);
    }
}
