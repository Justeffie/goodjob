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

$factory->define(App\Models\Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'usuario' => $faker->userName,
        'email' => $faker->email,
        'nacimiento' => $faker->date($format = 'y-m-d', $max = '2000-12-30'),
        'pass' => $faker->password,
        'foto_perfil' => $faker->imageUrl($width= 640, $height= 480)
    ];
});
 ?>
