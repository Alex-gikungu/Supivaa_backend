<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeSection;

class HomeSectionSeeder extends Seeder
{
   
    public function run(): void
    {
        HomeSection::updateOrCreate(
            ['id' => 1],
            [
                
                'hero_title' => "Powering Africa's Gender-Forward Future",
                'hero_subtext' => "We coach our clients to move from being gender accidental to gender-intentional to gender champions.",
                'hero_button_1' => "Ventures & SMEs →",
                'hero_button_2' => "Funders & Partners →",


                
                'challenge_heading' => "The Challenge",
                'challenge_paragraph' => "Africa’s gender-lens opportunity is clear, but most strategies fall short in execution. The issue isn’t the plan—it’s taking action. We bridge that gap by turning ambition into achievable investments.",
                'stat_1_value' => "$34B",
                'stat_1_text' => "Assets Under Management mobilised globally by the 2X Challenge",
                'stat_2_value' => "$300B",
                'stat_2_text' => "GDP Gained by 2025 if the gender gap is closed in Sub-Saharan Africa",
            ]
        );
    }
}
