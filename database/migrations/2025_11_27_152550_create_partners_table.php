<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');        // Partner name
            $table->string('image');       // Path to logo or story image
            $table->string('alt_text');    // Alt text for accessibility
            $table->string('link')->nullable(); // Optional link

            // Partnership Stories
            $table->string('sector')->nullable();      
            $table->text('description')->nullable();   

            // ✅ New field to explicitly mark logos
            $table->boolean('is_logo')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
