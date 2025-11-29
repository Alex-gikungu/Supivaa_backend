<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApproachStep;

class ApproachStepSeeder extends Seeder
{
    public function run(): void
    {
        $steps = [
            [
                'title' => 'Capital Raising',
                'description' => 'We align your investment case with gender-focused and catalytic funders to unlock aligned growth capital.',
                'image' => '/images/dollar.jpeg',
                'badge_color' => 'teal',
            ],
            [
                'title' => 'Advisory Services',
                'description' => 'We co-design gender-smart strategies, policies and action plans to make your ambition fundable.',
                'image' => '/images/bulb.jpeg',
                'badge_color' => 'brown',
            ],
            [
                'title' => 'Impact Management',
                'description' => 'We build credible impact stories by pairing rigorous IMM with clear narrative so investors and stakeholders can trust your results.',
                'image' => '/images/bar.jpeg',
                'badge_color' => 'accent',
            ],
            [
                'title' => 'Capacity Development',
                'description' => 'We deliver targeted gender-lens and climate training and co-manage programs that equip your team to implement and scale.',
                'image' => '/images/roc.jpeg',
                'badge_color' => 'deep',
            ],
        ];

        foreach ($steps as $step) {
            ApproachStep::updateOrCreate(
                ['title' => $step['title']], // match by title
                $step
            );
        }
    }
}
