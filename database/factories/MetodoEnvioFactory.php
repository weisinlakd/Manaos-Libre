<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MetodoEnvio;
use App\EmpresaEnvio;
use Faker\Generator as Faker;

$empresas = EmpresaEnvio::all();
$idMax = $empresas->count();

// dd($idMax);
$factory->define(MetodoEnvio::class, function (Faker $faker) {
    return [
        //
        "name" => $faker->words(3, true),
        "descripcion" => $faker->sentence(),
        "costo_envio" => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 45),
        "tiempo_envio" => $faker->numberBetween(24,672),
        "radio_entrega" => $faker->numberBetween(1,30),
        "id_empresa" => $faker->numberBetween(4, 250)
    ];
});
