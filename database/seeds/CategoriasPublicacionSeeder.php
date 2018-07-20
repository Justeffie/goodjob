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
          ['nombre' => 'Diseño Multimedial'],
          ['nombre' => 'Diseño Gráfico'],
          ['nombre' => 'Fotografía'],
          ['nombre' => 'Arquitectura'],
          ['nombre' => 'Ingeniería']
        ])
    }
}
