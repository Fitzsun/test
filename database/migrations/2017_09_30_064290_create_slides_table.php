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
        // 轮播图数据库的设计
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            // 轮播图
            $table->string('path');
            $table->string('slide_name')->unique();
            // 区分是一级轮播还是二级轮播
            $table->smallInteger('level');
            // 顺序靠前的显示
            $table->smallInteger('order');
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
