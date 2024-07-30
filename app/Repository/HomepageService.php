<?php

namespace App\Repository;

use App\Models\Testimonial;

class HomepageService
{
    public function getHomepageData()
    {
        $testimonials = Testimonial::query()
            ->active()
            ->orderBy('display_order', 'asc')
            ->get();
//more than one returns as array
        return $testimonials;
    }
}
