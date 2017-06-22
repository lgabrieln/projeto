<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('ano');
            $table->integer('filme_id')->unsigned();
            $table->timestamps();
            //    $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('filme_id')->references('id')->on('filmes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ators');
    }
}
