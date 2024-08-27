<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPartner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'business_url',
        'logo_path',
        'is_active'
    ];
    //Scope for active partners
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    //Scope for category
    public function scopeCategory($query, $category)
    {
        if($category) {
            return $query->where('category', $category);
        }
        return $query;
    }

}
