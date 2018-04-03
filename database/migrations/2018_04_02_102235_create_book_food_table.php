<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_food', function (Blueprint $table) {
            $table->increments('id')->comment('食材ID');;
            $table->integer('bid')->comment('菜谱ID');;
            $table->string('food')->comment('食材');
            $table->string('dosage')->comment('用量');
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
        Schema::dropIfExists('book_food');
    }
}
