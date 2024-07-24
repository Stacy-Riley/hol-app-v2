<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
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
            'position' => fake()->numberBetween(1, 20),
            'author' => fake()->randomElement([fake()->name(), fake()->name(), fake()->name()]),
            'body' => fake()->paragraph(),
        ];
    }
}
