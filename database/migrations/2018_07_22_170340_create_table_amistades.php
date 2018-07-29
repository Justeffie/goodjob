<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAmistades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('amistades', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->integer('id_amigo')->unsigned()->nullable();
          $table->integer('id_usuario')->unsigned()->nullable();
          $table->foreign('id_amigo')->references('id')->on('users');
          $table->foreign('id_usuario')->references('id')->on('users');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amistades');
    }
}
