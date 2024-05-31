<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainPagesTable extends Migration
{
    public function up()
    {
        Schema::create('main_pages', function (Blueprint $table) {
            $table->id();
            $table->string('S1_bg_img')->nullable();
            $table->string('S1_heading_1')->nullable();
            $table->string('S1_heading_2')->nullable();
            $table->string('S1_link_text_1')->nullable();
            $table->string('S2_heading_1')->nullable();
            $table->string('S2_heading_2')->nullable();
            $table->string('placeholder_image_1')->nullable();
            $table->string('placeholder_text_1')->nullable();
            $table->string('placeholder_image_2')->nullable();
            $table->string('placeholder_text_2')->nullable();
            $table->string('placeholder_image_3')->nullable();
            $table->string('placeholder_text_3')->nullable();
            $table->string('S2_link_text_1')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('main_pages');
    }
}
