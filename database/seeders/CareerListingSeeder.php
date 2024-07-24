<?php

namespace Database\Seeders;

use App\Models\CareerListing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CareerListing::factory()->count(15)->create();
    }
}
