<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WhatWeDoSection;

class WhatWeDoSectionSeeder extends Seeder
{
    public function run(): void
    {
        WhatWeDoSection::updateOrCreate(
            ['id' => 1],
            [
                // 🔹 What We Do Section
                'whatwedo_intro'       => 'We work with ventures, funders, and partners across the gender-climate ecosystem.',
                'whatwedo_title'       => 'What We Do',
                'whatwedo_description' => 'We bridge the gap between gender-smart strategy and execution, helping feminist enterprises access capital and enabling Fund Managers and Programmatic Partners to maximize their gender-climate impact across Africa.',
                'whatwedo_button_1'    => 'For Ventures & SMEs →',
                'whatwedo_button_2'    => 'For Funders & Partners →',
                'whatwedo_image'       => 'images/strategy-photo.png',

                // 🔹 What Makes Us Different Section
                'different_title'      => 'What Makes Us Different',
                'different_points'     => [
                    [
                        'title' => 'Africa-Rooted Expertise',
                        'description' => 'We understand African markets, gender dynamics, and climate realities because we live and work here.',
                    ],
                    [
                        'title' => 'Gender-Climate Nexus Focus',
                        'description' => 'We specialise in the intersection of gender-lens investing and climate action—a critical but underserved space.',
                    ],
                    [
                        'title' => 'Implementation Support',
                        'description' => 'We stay with you beyond strategy development to ensure execution and measurable results.',
                    ],
                    [
                        'title' => 'Evidence-Based Methods',
                        'description' => 'We use proven frameworks (2X Global, IRIS+) while adapting to local contexts.',
                    ],
                ],
                'different_image'      => 'images/difference-photo.png',

                // 🔹 Who We Serve Section
                'serve_title'          => 'Who We Serve',
                'serve_cards'          => [
                    [
                        'icon' => 'images/ventures.png',
                        'title' => 'For Ventures & SMEs',
                        'description' => 'Investment readiness, gender-smart strategies, and capital connections for feminist enterprises and women-led businesses seeking to scale their impact.',
                        'link' => '#',
                    ],
                    [
                        'icon' => 'images/funders.png',
                        'title' => 'For Funders & Partners',
                        'description' => 'Gender-lens investing frameworks, due diligence support, and portfolio impact measurement for investors and development partners.',
                        'link' => '#',
                    ],
                    [
                        'icon' => 'images/services.png',
                        'title' => 'Our Services',
                        'description' => 'Comprehensive consulting services from strategy development to implementation support, capacity building, and impact measurement.',
                        'link' => '#',
                    ],
                    [
                        'icon' => 'images/focus.png',
                        'title' => 'Our Focus Areas',
                        'description' => 'Specialized expertise at the intersection of gender-lens investing and climate action across key sectors in Africa.',
                        'link' => '#',
                    ],
                ],

                // 🔹 Our Approach Section
                'approach_title'       => 'Our Approach',
                'approach_intro'       => 'We partner with you from strategy to execution.',
                'approach_steps'       => [
                    [
                        'number' => '01',
                        'title' => 'Listen & Understand',
                        'description' => 'We start by deeply understanding your context, challenges, and aspirations.',
                    ],
                    [
                        'number' => '02',
                        'title' => 'Co-Create Solutions',
                        'description' => 'We work alongside you to develop strategies that are practical and achievable.',
                    ],
                    [
                        'number' => '03',
                        'title' => 'Build Capacity',
                        'description' => 'We transfer knowledge and skills so you can sustain impact beyond our engagement.',
                    ],
                    [
                        'number' => '04',
                        'title' => 'Measure & Adapt',
                        'description' => 'We track progress, measure outcomes, and adjust strategies based on evidence.',
                    ],
                ],

                // 🔹 Ready To Get Started Section
                'ready_title'          => 'Ready to Get Started?',
                'ready_subtext'        => 'Let\'s work together to turn your vision into measurable impact. Reach out to discuss your needs and explore how we can support you.',
                'ready_button_1'       => 'Contact Us',
                'ready_button_2'       => 'See Our Impact',
            ]
        );
    }
}
