<?php
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Publicacion::class, function (Faker $faker) {
    return [
        'imagen' => $faker->imageUrl($width= 640, $height= 480),
        'descripcion' => $faker->text,
        'me_gustas' => $faker->numberBetween($min = 1, $max = 100),
        'id_categoria' => $faker->numberBetween($min = 1, $max = 5),
        'id_usuario' => $faker->numberBetween($min = 1, $max = 20),
    ];
});
 ?>
