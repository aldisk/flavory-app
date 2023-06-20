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
        Schema::create('reviews', function (Blueprint $table) {
            $table->string('user_id');
            $table->foreign('user_id')->references('username')->on('users')->cascadeOnDelete();
            $table->unsignedBigInteger('resep_id');
            $table->foreign('resep_id')->references('id')->on('reseps')->cascadeOnDelete();
            $table->string('review');
            $table->integer('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
