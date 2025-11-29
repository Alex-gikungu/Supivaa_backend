<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApproachStepsTable extends Migration
{
    public function up(): void
    {
        Schema::create('approach_steps', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image'); // path to icon
            $table->string('badge_color'); // e.g. teal, brown, accent, deep
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('approach_steps');
    }
}
