<?php

namespace Database\Factories;

use App\Models\BusinessService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BusinessService>
 */
class BusinessServiceFactory extends Factory
{
    protected $model = BusinessService::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->company,
            'body' => $this->faker->text,
            'category' => $this->faker->randomElement(['education', 'corporate']), // Randomly assigns a category
        ];
    }
}
