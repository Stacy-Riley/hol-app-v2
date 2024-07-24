<?php

namespace Database\Seeders;

use App\Models\PressPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PressPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PressPost::factory()->count(50)->create();
    }
}
