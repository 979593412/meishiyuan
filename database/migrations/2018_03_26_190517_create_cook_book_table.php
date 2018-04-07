<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCookBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cook_book', function (Blueprint $table) {
            $table->increments('id')->comment('菜谱ID');
            $table->string('title','20')->comment('菜谱标题');
            $table->string('pic','255')->default('')->comment('菜谱图片');
            $table->text('content')->comment('菜谱描述');
            $table->integer('cid')->comment('菜谱分类');
            $table->integer('uid')->comment('菜谱创建者');
            $table->string('tip','255')->comment('小贴士');
            $table->enum('status',['0','1'])->default('1')->comment('小贴士');
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
        Schema::dropIfExists('cook_book');
    }
}
