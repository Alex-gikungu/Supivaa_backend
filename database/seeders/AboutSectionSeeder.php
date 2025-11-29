<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    public function run(): void
    {
        AboutSection::updateOrCreate(
    ['id' => 1],
    [
        'title' => 'WHO WE ARE',
        'subtitle' => 'Supivaa Advisory Group',
        'description' => "is a Pan-African impact and gender-lens advisory firm bridging strategy and execution at the nexus of gender-lens investing and climate change solutions.\n\nWe guide ventures, Fund Managers, and Programmatic Partners to unlock resources that enable them to become more impact-driven.\n\nOur name 'Supivaa' stems from SUPporting the DIVAs in Africa.",
        'image' => '/images/km.jpeg',
        'alt_text' => 'Supivaa visual',

        'mission' => "To turn strategy into measurable impact by equipping ventures, funders and programmatic partners with the execution support, impact measurement tools, and storytelling capabilities needed to drive transformative gender and climate outcomes.",
        'mission_image' => '/images/mission-icon.jpeg',
        'mission_alt' => 'Mission icon',

        'vision' => "We empower Africa’s doers to lead the way toward a more inclusive and prosperous future—where everyone can thrive.",
        'vision_image' => '/images/vision-icon.jpeg',
        'vision_alt' => 'Vision icon',

        'story' => "Supivaa Advisory was born from a simple truth: Africa’s feminist and women-led enterprises hold the solutions to many of our most pressing challenges — but too often lack the capital, networks, and strategic support needed to scale. Our team has spent decades working alongside women-led businesses, impact investors, and development partners across sub-Saharan Africa. We’ve seen brilliant gender–climate strategies stall not because of weak ideas, but because they lacked the right execution support.\n\nWith offices in Nairobi and Vancouver, and a remote team across the continent, we partner with ventures, SMEs, funders, and programme partners to turn gender-smart strategies into investible opportunities and measurable outcomes. We don’t just write reports — we co-create practical solutions, build capacity, and stay with our partners until impact is realised.",
        'story_image' => '/images/covafams.jpeg',
        'story_alt' => 'Supivaa team collaboration',
    ]
);


    }
}
