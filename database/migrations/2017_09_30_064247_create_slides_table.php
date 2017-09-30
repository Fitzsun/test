<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $table->tinyInteger('is_primary')->comment('0:否,1:是');
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slide_name')->unique();
            $table->smallInteger('level');
            $table->string('imgUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
