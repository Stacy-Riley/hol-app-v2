<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'author',
        'category',
        'published_at',
        'is_published',
        'cover_image',
        'slug',
        'user_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            // Ensure the slug is unique and slugify the title
            $post->slug = static::generateUniqueSlug($post->title);
        });
    }

    // Utility method to generate unique slug
    protected static function generateUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }

    //Scope for published press posts
    public function scopeActive($query)
    {
        return $query->where('is_published', true);
    }

    //Scope for filtering by category
    public function scopeCategory($query, $category)
    {
        if($category) {
            return $query->where('category', $category);
        }
        return $query;
    }

    //Scope for fetching the most recent posts
    public function scopeRecent($query)
    {
        return $query->active()->orderBy('published_at', 'desc')->limit(5);
    }

}
