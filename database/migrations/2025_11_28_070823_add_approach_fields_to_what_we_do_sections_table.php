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
            // Add missing columns for Our Approach section
            if (!Schema::hasColumn('what_we_do_sections', 'approach_title')) {
                $table->string('approach_title')->nullable();
            }

            if (!Schema::hasColumn('what_we_do_sections', 'approach_intro')) {
                $table->string('approach_intro')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('what_we_do_sections', function (Blueprint $table) {
            if (Schema::hasColumn('what_we_do_sections', 'approach_title')) {
                $table->dropColumn('approach_title');
            }

            if (Schema::hasColumn('what_we_do_sections', 'approach_intro')) {
                $table->dropColumn('approach_intro');
            }
        });
    }
};
