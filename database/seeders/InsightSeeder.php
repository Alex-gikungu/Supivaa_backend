<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Insight;

class InsightSeeder extends Seeder
{
    
    public function run(): void
    {
        Insight::create([
            'title' => 'Scaling Laravel Applications',
            'summary' => 'Best practices for building scalable backend systems with Laravel and MySQL.',
            'author' => 'Johns Mwangi',
            'published_at' => now()->subDays(10),
            'image' => '/images/insights/laravel-scaling.jpg',
        ]);

        Insight::create([
            'title' => 'Design Systems for Modern Web Apps',
            'summary' => 'How design systems improve consistency, accessibility, and developer velocity.',
            'author' => 'Jane Doe',
            'published_at' => now()->subDays(5),
            'image' => '/images/insights/design-systems.jpg',
        ]);

        Insight::create([
            'title' => 'Future of AI in Marketing',
            'summary' => 'Exploring how AI-driven personalization is reshaping customer engagement.',
            'author' => 'Mark Otieno',
            'published_at' => now(),
            'image' => '/images/insights/ai-marketing.jpg',
        ]);
    }
}



