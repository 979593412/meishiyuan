<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_user_details', function (Blueprint $table) {
            $table->increments('id')->comment('用户详情ID');
            $table->string('nickname','20')->default('')->comment('用户昵称');
            $table->string('info','255')->default('')->comment('简介');
            $table->enum('sex', ['m','w','x'])->default('m')->comment('性别');
            $table->integer('birthday')->default(0)->comment('出生年月日');
            $table->string('addr','255')->default('')->comment('地址');
            $table->integer('uid')->comment('用户ID');
            $table->string('face','255')->default('')->comment('用户头像');
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
        Schema::dropIfExists('home_user_details');
    }
}
