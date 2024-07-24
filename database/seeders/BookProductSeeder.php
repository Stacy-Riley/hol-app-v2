<?php

namespace Database\Seeders;

use App\Models\BookProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookProduct::factory()->count(50)->create();
    }
}
