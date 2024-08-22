<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title =  'Blog Post: ' . fake()->words(rand(3, 6), true);

        return [
            'user_id' => 1,
            'is_published' => $this->faker->boolean(75),  // 75% chance to be published
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Business', 'Community', 'Education']),
            'author' => $this->faker->name(),
            'cover_image' => $this->faker->randomElement([
                'assets/images/blog/blog-img_01.jpg',
                'assets/images/blog/blog-img_02.jpg',
                'assets/images/blog/blog-img_03.jpg',]),
            'published_at' => Carbon::today()->subDays(rand(0, 365)),
        ];
    }
}
