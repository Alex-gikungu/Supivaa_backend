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
            // ✅ Only add the missing column(s)
            if (!Schema::hasColumn('what_we_do_sections', 'whatwedo_intro')) {
                $table->text('whatwedo_intro')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('what_we_do_sections', function (Blueprint $table) {
            // ✅ Only drop the column if it exists
            if (Schema::hasColumn('what_we_do_sections', 'whatwedo_intro')) {
                $table->dropColumn('whatwedo_intro');
            }
        });
    }
};
