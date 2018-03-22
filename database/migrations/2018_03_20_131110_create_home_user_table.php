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
            $table->increments('id');
            $table->string('username','20');
            $table->string('password','18');
            $table->string('email','50')->unique();
            $table->char('phone','11')->unique();
            $table->enum('status',['0','1']);
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
