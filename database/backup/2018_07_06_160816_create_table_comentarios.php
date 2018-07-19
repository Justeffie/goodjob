<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('publicacion');
            $table->integer('id_usuario_comenta')->unsigned()->nullable();
            $table->integer('id_usuario_recibe')->unsigned()->nullable();
            $table->foreign('id_usuario_comenta')->references('id')->on('usuarios');
            $table->foreign('id_usuario_recibe')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
