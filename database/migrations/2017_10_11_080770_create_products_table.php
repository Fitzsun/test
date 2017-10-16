<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            // 产品名称
            $table->string('product_name');
            // 产品类别
            $table->tinyInteger('product_category')->default(1);
            // 产品列表缩略图
            $table->string('product_thumbnail_url');
            // 产品展示图地址(为数组形式) (四个角度)
            $table->text('product_display_url');
            // 产品介绍图片(参数)
            $table->string('product_intro_url');
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
        Schema::dropIfExists('products');
    }
}
