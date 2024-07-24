<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogPost>
 */
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'is_published' => 1,
            'title' => fake()->sentence(),
            'body' => fake()->paragraph(),
            'category' => fake()->randomElement(['Education', 'Business']),
            'author' => fake()->randomElement([fake()->name(), fake()->name(), fake()->name()]),
            'cover_image' => env('APP_URL') . '/assets/img/blog/blog-05.jpg',
            'published_at' => now(),
        ];
    }
}
