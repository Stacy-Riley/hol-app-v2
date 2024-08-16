<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBlogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';
    public function scopeRecent($query)
    {
        return $query->orderBy('published_at', 'desc');
    }
}
