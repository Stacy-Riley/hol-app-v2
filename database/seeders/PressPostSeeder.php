<?php

namespace Database\Seeders;

use App\Models\PressPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PressPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pressPosts = [
            [
                'is_published'=> true,
                'content_type'=> 'article',
                'title' => 'Sierra\'s Story: House of Light',
                'author' => 'Mazumausa.com',
                'body' => '“You are not really making a difference with the children that you are working with. Your job is easily replaceable, and you’re always going to be a seat-filler.” These words pierced through Sierra like a knife. She had finally fulfilled her dream of becoming a teacher specially trained to work with blind and visually impaired individuals and she was excelling at it."',
                'category' => 'Community',
                'cover_image_path' => '/assets/images/press-page/Sierra-Dockery.png',
                'img_caption' => 'Founder Sierra Dockery',
                'external_link_url' => 'https://mazumausa.com/podcast/sierras-story-house-of-light/',
                'published_at' => Carbon::parse('May 24, 2023'),
            ],
            [
                'is_published'=> true,
                'content_type'=> 'article',
                'title' => 'Spreading Positivity Beyond Borders: You Are Beautiful Braille Stickers',
                'author' => 'Vasia Rigou',
                'body' => 'Positivity has always been at the axis of You Are Beautiful—from stickers, to apparel, to public art—and now they have expanded that message beyond the sighted world by creating their first-ever Braille stickers to help us identify with one another, bring the community together and ensure everyone is seen and heard.',
                'category' => 'Community',
                'cover_image_path' => '/assets/images/press-page/brailleyouarebeautiful.png',
                'img_caption' => 'You Are Beautiful Braille Stickers/ Photo courtesy You Are Beautiful',
                'external_link_url' => 'https://design.newcity.com/2023/04/19/you-are-beautiful-braille-stickers-spread-positivity-beyond-borders/',
                'published_at' => Carbon::parse('April 19, 2023'),
            ],
            [
                'is_published'=> true,
                'content_type'=> 'article',
                'title' => 'Resources for Ghana: Redbird teacher’s nonprofit will support blind children in Africa',
                'author' => 'Tommy Navickas',
                'body' => 'Whenever there is an opportunity to support young learners, Sierra Dockery ’12 will always be “all-in.” In September 2018, Dockery gave a three-day workshop to 33 P-20 educators at the School for the Blind in Cape Cove, Ghana. It was a trip she never expected to take.',
                'category' => 'Community',
                'cover_image_path' => '/assets/images/press-page/Sierra-Dockery-Ghana-Low-Vision-Blindness-Educator.jpg',
                'img_caption' => 'Sierra Dockery (middle wearing white t-shirt) with students, teachers, and staff at the unit for the blind in Cape Cove, Ghana.',
                'external_link_url' => 'https://news.illinoisstate.edu/2019/07/resources-for-ghana-redbird-teachers-nonprofit-will-support-blind-children-in-africa/',
                'published_at' => Carbon::parse('July 9, 2019'),
            ],
            [
                'is_published'=> true,
                'content_type'=> 'podcast',
                'title' => 'Episode 163 - Sierra Dockery',
                'author' => 'Faith Marketplace Radio',
                'body' => null,
                'category' => 'Community',
                'cover_image_path' => null,
                'img_caption' => null,
                'external_link_url' => 'https://podcasts.apple.com/us/podcast/episode-163-sierra-dockery/id1493308807?i=1000606903756',
                'published_at' => Carbon::parse('April 1, 2023'),
            ],
        ];
            DB::table('press_posts')->insert($pressPosts);
    }
}
