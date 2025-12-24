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
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('address');
            $table->string('contact');
            $table->text('about');
            $table->json('education');
            $table->json('experience');
            $table->json('skills');
            $table->json('languages');
            $table->string('portfolio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};
