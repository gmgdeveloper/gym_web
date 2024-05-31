<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->text('feedback');
            $table->unsignedTinyInteger('facilities_rating');
            $table->unsignedTinyInteger('coaching_rating');
            $table->unsignedTinyInteger('atmosphere_rating');
            $table->unsignedTinyInteger('overall_rating');
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('gym_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('gym_id')->references('id')->on('gyms')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
