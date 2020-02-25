<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EmpresaEnvio;
use App\Direccion;
use Faker\Generator as Faker;

$direcciones = Direccion::all();

$factory->define(EmpresaEnvio::class, function (Faker $faker) {
    return [
        //
        "name" => $faker->company(),
        "id_direccion" => $faker->numberBetween(5, 70),
        
    ];
});
