<?php

use Illuminate\Database\Seeder;

class CategoriasPublicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias_publicacion')->insert([
          ['id' => 1, 'nombre' => 'Diseño Multimedial'],
          ['id' => 2, 'nombre' => 'Diseño Gráfico'],
          ['id' => 3, 'nombre' => 'Fotografía'],
          ['id' => 4, 'nombre' => 'Arquitectura'],
          ['id' => 5, 'nombre' => 'Ingeniería']
        ]);
    }
}
