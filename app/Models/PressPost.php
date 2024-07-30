<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PressPost extends Model
{
    use HasFactory;

    //Scope for published press posts
    public function scopeActive($query)
    {
        return $query->where('is_published', true);
    }

    //Scope for content type
    public function scopeContentType($query, $contentType)
    {
        if($contentType) {
            return $query->where('content_type', $contentType);
        }
        return $query;
    }

    //Scope for filtering by category
    public function scopeCategory($query, $category)
    {
        if($category) {
            return $query->where('category', $category);
        }
        return $query;
    }
}
