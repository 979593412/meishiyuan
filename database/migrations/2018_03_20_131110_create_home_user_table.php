<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_user', function (Blueprint $table) {
            $table->increments('id')->comment('用户ID');
            $table->string('username','20')->comment('用户名');
            $table->string('password','255')->comment('密码');
            $table->string('email','50')->default('')->comment('邮箱');
            $table->char('phone','11')->default('')->comment('电话');
            $table->enum('status',['0','1'])->comment('状态');
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
        Schema::dropIfExists('home_user');
    }
}
