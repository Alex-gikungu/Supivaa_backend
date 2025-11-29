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
        Schema::create('c_t_a_sections', function (Blueprint $table) {
            $table->id();
            $table->string('headline');               // Main CTA headline
            $table->text('subtext')->nullable();      // Supporting text or description
            $table->string('button_text')->nullable(); // Text shown on the CTA button
            $table->string('button_url')->nullable();  // Link the button points to
            $table->timestamps();                     // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_t_a_sections');
    }
};
