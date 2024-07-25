<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'How can I make a donation to support House of Light’s mission and initatives?',
                'answer' => 'At House of Light, we welcome your generous contributions to help us further our mission and support our initiatives. You can easily make a <a href="www.gofundme.com">donation</a> on our secure platform or apply to sponsor a student!'
            ],
            [
                'question' => 'How can I make a donation to support House of Light’s mission and initatives?',
                'answer' => 'At House of Light, we welcome your generous contributions to help us further our mission and support our initiatives. You can easily make a <a href="www.gofundme.com">donation</a> on our secure platform or apply to sponsor a student!'
            ],
        ];

        foreach ($faqs as $faq) {
            $faqRecord = new Faq();
            $faqRecord->question = $faq['question'];
            $faqRecord->answer = $faq['answer'];
            $faqRecord->save();
        }
    }
}
