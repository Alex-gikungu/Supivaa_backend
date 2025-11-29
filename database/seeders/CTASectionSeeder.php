<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CTASection;

class CTASectionSeeder extends Seeder
{

    public function run(): void
    {
        CTASection::create([
            'headline' => 'Ready to Transform Your Business?',
            'subtext' => 'Partner with Supivaa Advisory Group and unlock scalable growth strategies tailored to your needs.',
            'button_text' => 'Get Started',
            'button_url' => '/contact',
        ]);

        CTASection::create([
            'headline' => 'Join Our Newsletter',
            'subtext' => 'Stay updated with the latest insights, trends, and strategies from our experts.',
            'button_text' => 'Subscribe Now',
            'button_url' => '/subscribe',
        ]);

        CTASection::create([
            'headline' => 'Explore Our Services',
            'subtext' => 'Discover how our advisory solutions can help you achieve sustainable success.',
            'button_text' => 'View Services',
            'button_url' => '/services',
        ]);
    }
}


