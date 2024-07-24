<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookProduct>
 */
class BookProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'author' => fake()->randomElement([fake()->name(), fake()->name(), fake()->name()]),
            'cover_image_path' => env('APP_URL') . '/assets/img/blog/blog-05.jpg',
            'grade_1_cost' => fake()->numberBetween(1000, 9999),
            'grade_2_cost' => fake()->numberBetween(1000, 9999),
            'num_pages_grade_1' => fake()->numberBetween(100, 999),
            'num_pages_grade_2' => fake()->numberBetween(100, 999),
        ];
    }
}
