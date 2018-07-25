<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategoriasPublicacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_publicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre');

        });
        DB::table('categorias_publicacion')->insert([
          ['id' => 1, 'nombre' => 'Diseño Multimedial'],
          ['id' => 2, 'nombre' => 'Diseño Gráfico'],
          ['id' => 3, 'nombre' => 'Fotografía'],
          ['id' => 4, 'nombre' => 'Arquitectura'],
          ['id' => 5, 'nombre' => 'Ingeniería']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias_publicacion');
    }
}
