<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePublicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagen');
            $table->string('descripcion', 300);
            $table->integer('me_gustas');
            $table->integer('id_categoria')->unsigned()->nullable();
            $table->integer('id_usuario')->unsigned()->nullable();
            $table->foreign('id_categoria')->references('id')->on('categorias_publicacion');
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
        Schema::dropIfExists('publicaciones');
    }
}
