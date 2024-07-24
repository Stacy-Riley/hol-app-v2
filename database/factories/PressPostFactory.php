<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PressPost>
 */
class PressPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'is_published' => 1,
            'title' => fake()->sentence(),
            'body' => fake()->paragraph(),
            'category' => fake()->randomElement(['Education', 'Business']),
            'external_link_url' => fake()->url(),
            'cover_image_path' => env('APP_URL') . '/assets/img/blog/blog-05.jpg',
            'published_at' => fake()->date(),
        ];
    }
}
