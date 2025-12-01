<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            TeamMemberSeeder::class,
            ApproachStepSeeder::class,
            CTASectionSeeder::class,
            InsightSeeder::class,
            PartnerSeeder::class,  
            ValueSeeder::class,
            AboutSectionSeeder::class,
            HomeSectionSeeder::class,
            WhatWeDoSectionSeeder::class,
            FixServeCardsSeeder::class,
            UserSeeder::class
        ]);
    }
}
