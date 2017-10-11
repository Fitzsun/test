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
            $table->string('name');
            // 产品类别
            $table->string('product_category');
            // 产品列表图
            $table->string('thumbnail_url');
            // 产品介绍图片
            $table->string('intro_url');
            // 产品展示图片(四个角度) 我曹怎么办?
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
