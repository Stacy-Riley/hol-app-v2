<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'is_published' => true,
                'question' => 'How can I make a donation to support House of Light’s mission and initiatives?',
                'answer' => 'At House of Light, we welcome your generous contributions to help us further our mission and support our initiatives. You can easily <a href="www.gofundme.com">make a donation</a> on our secure platform or apply to <a href="/sponsor_form">sponsor a student!'
            ],
            [   'is_published' => true,
                'question' => 'Can you provide information about volunteer opportunities and how to get involved with House of Light?',
                'answer' => 'If you\'re interested in getting involved and making a difference, House of Light offers various volunteer opportunities. Discover how you can contribute your time and skills by visiting our <a href="/contact">contact form</a> and selecting volunteer from the dropdown.'
            ],
            [   'is_published' => true,
                'question' => 'What services does House of Light offer to corporate organizations seeking support?',
                'answer' => 'At House of Light, we offer a hands-on approach to help corporate entities mitigate potential liability through our comprehensive services, including:
                      <br>
                    <ul>
                     <li>2-day workshop: This training empowers organizations with practical insights and strategies to foster inclusivity and diversity in the workplace.</li>
                     <li>1-day training: Our focused one-day training equips corporate staff with essential knowledge and tools to create an inclusive and accessible environment within their organization.</li>
                     <li>Speaking Opportunity: Engage with our expert team for speaking engagements, where we enlighten your staff on hiring best practices and raise awareness about the importance of disability inclusion.</li>
                    </ul> '
            ],
            [   'is_published' => true,
                'question' => 'How can corporate entities partner with House of Light to fulfill their social responsibility goals, mission, and vision?',
                'answer' => 'Empower your corporate entity to fulfill its social responsibility goals, mission, and vision through a purposeful collaboration with House of Light. Our specialized program is designed to equip organizations with the knowledge and skills needed to work seamlessly with individuals with disabilities, including hiring. Explore potential partnerships and reap the rewards of our impactful disability inclusion training by visiting our dedicated <a href="/services/corporate">corporate training section</a> today.'
            ],
            [   'is_published' => true,
                'question' => 'Are there webinars and workshops for teachers interested in transitioning into educational consulting roles provided by House of Light?',
                'answer' => 'House of Light offers enriching webinars and workshops tailored to help educators make a successful transition into educational consulting. Find out more about our programs through our <a href="https://www.facebook.com/houseoflightllc">Facebook Group.</a>'
            ],
        ];

        DB::table('faqs')->insert($faqs);

    }
}
