<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');        // WHO WE ARE
            $table->string('subtitle');     // Supivaa Advisory Group
            $table->text('description');    // multiple paragraphs
            $table->string('image');        // /images/km.jpeg
            $table->string('alt_text');     // Supivaa visual

            // Mission & Vision text
            $table->text('mission')->nullable(); 
            $table->text('vision')->nullable();  

            // Mission & Vision images + alt text
            $table->string('mission_image')->nullable(); 
            $table->string('mission_alt')->nullable();   
            $table->string('vision_image')->nullable();  
            $table->string('vision_alt')->nullable();  

            // story and images + alt text
            $table->text('story')->nullable();          // Our Story text (multiple paragraphs with \n separators)
            $table->string('story_image')->nullable();  // /images/covafams.jpeg
            $table->string('story_alt')->nullable();    // Supivaa team collaboration


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
