<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FixServeCardsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('what_we_do_sections')
            ->where('id', 1) 
            ->update([
                'serve_cards' => json_encode([
                    [
                        "icon" => "images/ventures.png",
                        "title" => "Capital Raising",
                        "description" => "We align your investment case with gender-focused and catalytic funders to unlock aligned growth capital.",
                        "link" => "#"
                    ],
                    [
                        "icon" => "images/funders.png",
                        "title" => "Advisory Services",
                        "description" => "We co-design gender-smart strategies, policies and action plans to make your ambition fundable.",
                        "link" => "#"
                    ],
                    [
                        "icon" => "images/services.png",
                        "title" => "Impact Management",
                        "description" => "We build credible impact stories by pairing rigorous IMM with clear narrative so investors and stakeholders can trust your results.",
                        "link" => "#"
                    ],
                    [
                        "icon" => "images/focus.png",
                        "title" => "Capacity Development",
                        "description" => "We deliver targeted gender-lens and climate training and co-manage programs that equip your team to implement and scale.",
                        "link" => "#"
                    ],
                ])
            ]);
    }
}
