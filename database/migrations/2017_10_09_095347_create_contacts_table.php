<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            // 电话号码应该用什么类型的数据?
            // 存成字符串类型，因为有可能也涉及到“-”这样的字符串 你设成char 或者是varchar类型的 长度给11就行了。
            // 什么时候加default
            $table->string('phone',20)->default('');
            $table->string('email',50)->default('');
            $table->string('address',50)->default('');
            $table->string('slogan',100)->default('');
            $table->string('imgUrl',255);
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
        Schema::dropIfExists('contacts');
    }
}
