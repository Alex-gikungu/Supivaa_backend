<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('values', function (Blueprint $table) {
            $table->id();
            $table->string('title');       // e.g. Impact First
            $table->text('description');   // value text
            $table->string('image');       // /images/mission-icon.jpeg
            $table->string('alt_text');    // accessibility alt text
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('values');
    }
};

