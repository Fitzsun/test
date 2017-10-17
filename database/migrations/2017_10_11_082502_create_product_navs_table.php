<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductNavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_navs', function (Blueprint $table) {
            $table->increments('id');
            // 用于区分是否为一级菜单
            $table->tinyInteger('parent_id')->unsigned()->default(0);
            // 所属类别名字  新风系统  
            $table->string('product_category');
            // 之情为path
            $table->string('product_path');
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
        Schema::dropIfExists('product_navs');
    }
}
