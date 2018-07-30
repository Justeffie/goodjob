<?php

use Illuminate\Database\Seeder;

class AmistadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = factory(App\Models\Amistades::class, 50)->create();
    }
}
