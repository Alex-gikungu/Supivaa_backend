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
        Schema::table('what_we_do_sections', function (Blueprint $table) {
            // Make image-related columns nullable
            $table->string('whatwedo_image')->nullable()->change();
            $table->string('different_image')->nullable()->change();
            // If serve_cards is stored as JSON, make it nullable too
            $table->json('serve_cards')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('what_we_do_sections', function (Blueprint $table) {
            // Revert back to NOT NULL if needed
            $table->string('whatwedo_image')->nullable(false)->change();
            $table->string('different_image')->nullable(false)->change();
            $table->json('serve_cards')->nullable(false)->change();
        });
    }
};
