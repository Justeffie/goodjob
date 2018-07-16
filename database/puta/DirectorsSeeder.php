<?php

use Illuminate\Database\Seeder;

class DirectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directors = factory(App\Models\Director::class, 20)->create();
    }
}
