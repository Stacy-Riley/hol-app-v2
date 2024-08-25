<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'author_name',
        'job_title',
        'comment',
        'is_published',
    ];

    //make a query that is ordered by the display_order field name

    public function scopeActive($query)
    {
        return $query->where('is_published', true);
    }
}
