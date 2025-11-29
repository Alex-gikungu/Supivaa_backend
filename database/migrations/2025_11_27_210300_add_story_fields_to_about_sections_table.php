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
        Schema::table('about_sections', function (Blueprint $table) {
            // Add story fields only if they don't already exist
            if (!Schema::hasColumn('about_sections', 'story')) {
                $table->text('story')->nullable()->after('vision_alt');
            }
            if (!Schema::hasColumn('about_sections', 'story_image')) {
                $table->string('story_image')->nullable()->after('story');
            }
            if (!Schema::hasColumn('about_sections', 'story_alt')) {
                $table->string('story_alt')->nullable()->after('story_image');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_sections', function (Blueprint $table) {
            // Drop the story fields if they exist
            if (Schema::hasColumn('about_sections', 'story')) {
                $table->dropColumn('story');
            }
            if (Schema::hasColumn('about_sections', 'story_image')) {
                $table->dropColumn('story_image');
            }
            if (Schema::hasColumn('about_sections', 'story_alt')) {
                $table->dropColumn('story_alt');
            }
        });
    }
};
