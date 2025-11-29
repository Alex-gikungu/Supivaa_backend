<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            // Logos only
            ['name' => 'African Guarantee Fund', 'image' => '/images/african-guarantee.png', 'alt_text' => 'African Guarantee Fund', 'link' => '#', 'is_logo' => true],
            ['name' => 'CAFIID', 'image' => '/images/cafiid.png', 'alt_text' => 'CAFIID', 'link' => '#', 'is_logo' => true],
            ['name' => 'xFORD', 'image' => '/images/xford.png', 'alt_text' => 'xFORD', 'link' => '#', 'is_logo' => true],
            ['name' => 'COFREGEN', 'image' => '/images/cofregen.png', 'alt_text' => 'COFREGEN', 'link' => '#', 'is_logo' => true],
            ['name' => 'KOKO', 'image' => '/images/koko.png', 'alt_text' => 'KOKO', 'link' => '#', 'is_logo' => true],
            ['name' => 'Darley', 'image' => '/images/darley.png', 'alt_text' => 'DARLEY', 'link' => '#', 'is_logo' => true],
            ['name' => 'CheckUps COVA', 'image' => '/images/checkups.png', 'alt_text' => 'CHECKUPS COVA', 'link' => '#', 'is_logo' => true],
            ['name' => 'MEDA', 'image' => '/images/meda.png', 'alt_text' => 'MEDA', 'link' => '#', 'is_logo' => true],

            // Stories
            [
                'name' => 'Darley',
                'image' => '/images/darley.jpeg',
                'alt_text' => 'Darley agriculture initiative',
                'link' => '#',
                'sector' => 'Agriculture',
                'description' => 'We partnered with Darley to measure and communicate their impact, strengthening their investment case and supporting 1,500 smallholder farmers.',
                'is_logo' => false,
            ],
            [
                'name' => 'CheckUps COVA',
                'image' => '/images/covafam.jpeg',
                'alt_text' => 'CheckUps COVA healthcare program',
                'link' => '#',
                'sector' => 'Healthcare',
                'description' => 'We worked alongside CheckUps COVA to evidence their impact, unlock new capital pathways, and help 500,000+ patients access healthcare.',
                'is_logo' => false,
            ],
            [
                'name' => 'MEDA',
                'image' => '/images/medapick.jpeg',
                'alt_text' => 'MEDA Tanzania FEGEE initiative',
                'link' => '#',
                'sector' => 'Financial Institutions',
                'description' => 'Through MEDA Tanzania’s FEGEE initiative, we built and delivered a gender-responsive training programme that transformed how Financial Service Providers serve women entrepreneurs—contributing to 34,033 decent work opportunities, with women accounting for 73%.',
                'is_logo' => false,
            ],
        ];

        foreach ($partners as $partner) {
            Partner::updateOrCreate(
                ['name' => $partner['name'], 'image' => $partner['image']], 
                $partner
            );
        }
    }
}
