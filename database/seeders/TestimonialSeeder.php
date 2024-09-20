<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [   'priority' => 1,
                'is_published' => true,
                'display_order' => 0,
                'author_name' => 'Mindy Diaz',
                'job_title' => 'Director Student Disability Services',
                'comment' => 'House of Light will be my first choice in document conversions. Your professionalism, kindness, and quality are aligned with my expectations.'
            ],
            [   'priority' => 2,
                'is_published' => true,
                'display_order' => 1,
                'author_name' => 'L. Thomas Flagg',
                'job_title' => 'Building Our Own Community (BOOC)',
                'comment' => 'We get quality textbooks to provide for our blind children during our mission trip to Ghana. Every year they look forward to the new books we bring.'
            ],
            [   'priority' => 3,
                'is_published' => true,
                'display_order' => 2,
                'author_name' => 'A. Lee',
                'job_title' => 'Administrative Assistant',
                'comment' => 'Working at House of Light, I felt as though I was a part of the family. The CEO pushed me to pursue my own dreams and never made me feel as though I couldn\'t advance my career.'
            ],
        ];
                DB::table('testimonials')->insert($testimonials);
    }
}
