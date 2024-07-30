<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessPartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'is_active'=> true,
                'name' => 'Spectrios Institute for Low Vision',
                'category' => 'corporate',
                'business_url' => 'https://spectrios.org/',
                'logo_path' => '/assets/images/partner-logos/corporate/spectrios.png',
            ],
            [
                'is_active'=> true,
                'name' => 'America\'s Best Eyecare and Eyewear',
                'category' => 'corporate',
                'business_url' => 'https://www.americasbest.com/location/il/homewood/washington-park-plaza/',
                'logo_path' => '/assets/images/partner-logos/corporate/americas-best.png',
            ],
            [
                'is_active'=> true,
                'name' => 'Insights 4 Life',
                'category' => 'corporate',
                'business_url' => 'https://www.insights4lifecoaching.com/',
                'logo_path' => '/assets/images/partner-logos/corporate/insights-for-life.png',
            ],
            [
                'is_active'=> true,
                'name' => 'Matteson S.D. 162',
                'category' => 'education',
                'business_url' => 'https://www.sd162.org/',
                'logo_path' => '/assets/images/partner-logos/education/matteson.png',
            ],
            [
                'is_active'=> true,
                'name' => 'Kirby S.D. 140',
                'category' => 'education',
                'business_url' => 'https://www.ksd140.org/',
                'logo_path' => '/assets/images/partner-logos/education/KSD140.png',
            ],
            [
                'is_active'=> true,
                'name' => 'Chicago Heights Middle School',
                'category' => 'education',
                'business_url' => 'https://www.sd170.com/',
                'logo_path' => '/assets/images/partner-logos/education/chicago-heights.png',
            ],

        ];
        DB::table('business_partners')->insert($partners);
    }
}
