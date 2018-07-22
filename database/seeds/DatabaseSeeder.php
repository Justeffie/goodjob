<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(UsuariosSeeder::class);
       $this->call(CategoriasPublicacionSeeder::class);
       $this->call(PublicacionesSeeder::class);
       $this->call(AmistadesSeeder::class);
    }
}
