<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCookCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cook_category', function (Blueprint $table) {
            $table->increments('id')->comment('分类ID');
            $table->string('cname','20')->comment('分类名称');
            $table->integer('pid')->comment('父ID');
            $table->string('path','100')->comment('类别路径');
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
        Schema::dropIfExists('cook_category');
    }
}
