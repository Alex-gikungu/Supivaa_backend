<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('what_we_do_sections', function (Blueprint $table) {
            $table->id();

            // What We Do
            $table->string('whatwedo_title');
            $table->text('whatwedo_description');
            $table->string('whatwedo_button_1');
            $table->string('whatwedo_button_2');
            $table->string('whatwedo_image');

            // Our Approach (4 steps)
            $table->json('approach_steps'); // array of {number, title, description}

            // What Makes Us Different
            $table->string('different_title');
            $table->json('different_points'); // array of {title, description}
            $table->string('different_image');

            // Who We Serve (4 cards)
            $table->string('serve_title');
            $table->json('serve_cards'); // array of {icon, title, description, link}

            // Ready to Get Started
            $table->string('ready_title');
            $table->text('ready_subtext');
            $table->string('ready_button_1');
            $table->string('ready_button_2');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('what_we_do_sections');
    }
};
