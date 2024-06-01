<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGymsTable extends Migration
{
    public function up()
    {
        Schema::create('gyms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('contact');
            $table->string('location');
            $table->boolean('is_featured')->default(0)->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('fees')->nullable();
            $table->string('timing_from')->nullable();
            $table->string('timing_to')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gyms');
    }
}
