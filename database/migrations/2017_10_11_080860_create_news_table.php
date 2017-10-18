<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            // 所属类别:(公司新闻,行业资讯)
            $table->tinyInteger('category_id')->default(0);
            // 新闻标题
            $table->string('title');
            // 发布日期
            $table->date('publish_at');
            // 排序
            $table->smallInteger('order')->unsigned();
            // 新闻概述
            $table->text('meta_description');
            // 新闻图片缩略图
            $table->string('sm_image_url');
            // 新闻图片大图
            $table->string('lg_image_url');
            // 新闻内容
            $table->text('content');
            // 是否为热点资讯
            $table->boolean('is_hot')->default(false);
            // 是否为最新资讯
            $table->boolean('is_latest')->default(false);
            // 是否显示到首页
            $table->boolean('is_index')->default(false);
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
        Schema::dropIfExists('news');
    }
}
