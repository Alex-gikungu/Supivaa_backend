<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('home_sections', function (Blueprint $table) {
        $table->id();

        // Hero Section
        $table->string('hero_title');
        $table->text('hero_subtext');
        $table->string('hero_button_1');
        $table->string('hero_button_2');

        // Intent & Impact Section
        $table->string('challenge_heading');
        $table->text('challenge_paragraph');
        $table->string('stat_1_value');
        $table->string('stat_1_text');
        $table->string('stat_2_value');
        $table->string('stat_2_text');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sections');
    }
};
