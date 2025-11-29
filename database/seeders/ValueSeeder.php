<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Value;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            [
                'title' => 'Impact First',
                'description' => 'We measure success by the positive change we help create for FSMEs and communities across Africa.',
                'image' => '/images/mission-icon.jpeg',
                'alt_text' => 'Impact First icon',
            ],
            [
                'title' => 'Partnership Mindset',
                'description' => 'We work alongside our clients as trusted partners, co-creating solutions that work.',
                'image' => '/images/partnership-icon.jpeg',
                'alt_text' => 'Partnership Mindset icon',
            ],
            [
                'title' => 'Local Expertise',
                'description' => 'Deep understanding of African markets, gender dynamics, and climate realities.',
                'image' => '/images/local-icon.jpeg',
                'alt_text' => 'Local Expertise icon',
            ],
            [
                'title' => 'Global Standards',
                'description' => 'We bring international best practices (2X Global, IRIS+) while respecting local contexts.',
                'image' => '/images/global-icon.jpeg',
                'alt_text' => 'Global Standards icon',
            ],
        ];

        foreach ($values as $value) {
            Value::updateOrCreate(
                ['title' => $value['title']], // match by title
                $value
            );
        }
    }
}
