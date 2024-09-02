<?php

namespace Database\Seeders;

use App\Models\BusinessService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'priority' => 1,
                'category' => 'education',
                'title' => 'Teacher of the Visually Impaired (TVI)',
                'body' => 'We specialize in providing services to school districts in need of licensed Teachers of the Blind and Visually Impaired. Our flexible approach includes face-to-face, virtual, and hybrid models. Join us for exceptional support! #InclusiveEducation #VisuallyImpairedTeacher #RemoteLearning'
            ],
            [
                'priority' => 2,
                'category' => 'education',
                'title' => 'Professional Training',
                'body' => 'Our tailored professional training equips teachers and staff to support blind or visually impaired students effectively. Learn to utilize technology and meet the diverse needs of learners. Get prepared today!'
            ],
            [
                'priority' => 3,
                'category' => 'education',
                'title' => 'Evaluations',
                'body' => 'Seeking evaluations for visual impairment? We offer qualified licensed educators to assess your child or student. Get expert guidance in developing IEP or 504 plans for their needs. Trust us to ensure their success!'
            ],
            [
                'priority' => 4,
                'category' => 'education',
                'title' => 'Transcription Services',
                'body' => 'We meet all your transcription needs, from converting documents, books, and manuals, to Braille, Large Print, or Audio formats. We can provide comprehensive accessibility solutions for your content. You Can also browse the <a href="/products">Braille Books </a>we have available today.Enhance inclusivity today!'
            ],
            [
                'priority' => 5,
                'category' => 'education',
                'title' => 'Consultation',
                'body' => 'We offer expert consultation services for organizations working with or hiring individuals with visual impairments. Gain valuable insights on meeting their needs effectively.'
            ],
            [
                'priority' => 6,
                'category' => 'education',
                'title' => 'Braille Books',
                'body' => 'Explore our existing <a href="/products">Braille Books </a>collection in our Products. We understand and support the importance of Braille literacy for all. Support the <a href="/ghana/project">Ghana Initiative </a>as a portion of proceeds contributes to their cause. Make a difference today!'
            ],
            [
                'priority' => 1,
                'category' => 'corporate',
                'title' => 'Speaking Engagements',
                'body' => 'Our team is available to deliver engaging and impactful presentations to your team, offering essential guidance and support on your transformative journey towards becoming a more diverse and inclusive company. Complementing this, our meticulously crafted training and workshops provide practical insights and strategies, serving as a powerful catalyst for fostering a culture of inclusivity within your workplace. As you embark on the journey to shape a future-ready team, you\'ll discover that enhancing your preparedness today is not just a goal but a transformative commitment.'
            ],
            [
                'priority' => 2,
                'category' => 'corporate',
                'title' => 'Accessibility Services',
                'body' => 'We partner with organizations, small businesses, and government agencies to ensure that websites, applications, and other digital platforms are accessible to people with low vision or blindness. Our comprehensive accessibility services include consulting, advising, training, and testing to help you meet compliance standards and create exceptional user experiences for all.
                <ul>
                    <li>
                        <span>Accessibility Audits and Consulting:</span> Identify and eliminate barriers to ensure ADA compliance and optimal user experience.
                    </li>
                    <li>
                        <span>Workplace Accessibility Training:</span> Equip your team with the skills to create an inclusive workplace for all employees.

                    </li>
                    <li>
                        <span>Pathways to Employment:</span> Partner with us to hire talented individuals with disabilities and access valuable tax credits.
                    </li>
                </ul>

                '
            ],
            [
                'priority' => 3,
                'category' => 'corporate',
                'title' => 'Customized Workshops',
                'body' => 'Immerse and elevate your organization to new heights of inclusivity with our meticulously tailored two-day workshops. These workshops are thoughtfully designed to not only instill practical insights and effective strategies for nurturing a culture of inclusivity in the workplace, but also to ensure that you\'re fully equipped and empowered to navigate the path ahead with confidence. Take the transformative step towards readiness today, and embrace the journey of fostering a workplace environment that celebrates diversity and unity.
                <ul>
                    <li>
                        Enhance your brand reputation as a socially responsible company.
                    </li>
                    <li>
                        Expand your talent pool to access a diverse workforce.
                    </li>
                    <li>
                        Improve customer satisfaction and loyalty.
                    </li>
                    <li>
                        Mitigate legal risks associated with accessibility violations.
                    </li>
                </ul>
                '
            ],
        ];

        foreach ($services as $service) {
            BusinessService::create([
                'priority' => $service['priority'],
                'category' => $service['category'],
                'title' => $service['title'],
                'body' => $service['body'],
            ]);
        }
    }
}
