<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('successes', function (Blueprint $table) {
            // 新闻自增ID
            $table->increments('id');
            // 新闻列表图片
            $table->string('sm_image_url');
            // 新闻标题 string('title',50)后可以跟数值限制长度,先放着
            $table->string('title');
            // 服务时间   用什么格式呢?
            $table->timestamp('serve_time');
            // 建筑面积 
            $table->string('area');
            // 服务内容
            $table->string('serve_content');
            // 新闻详情图片
            $table->string('lg_image_url')->nullable();
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
        Schema::dropIfExists('successes');
    }
}
