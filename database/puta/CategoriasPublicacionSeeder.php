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
        $usuarios = factory(App\Models\CategoriasPublicacion::class, 20)->create();
    }
}
