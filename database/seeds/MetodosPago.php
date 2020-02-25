<?php

use Illuminate\Database\Seeder;

class MetodosPago extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('metodos_de_pago')->insert([

            "id" => 1,
            "nombre" => 'Pago Facil',
            "descripcion" => 'Pago Facil',
            "tiene_recargo" => false,

        ]);

        DB::table('metodos_de_pago')->insert([

            "id" => 2,
            "nombre" => 'Rapipago',
            "descripcion" => 'Rapipago',
            "tiene_recargo" => false,
            
        ]);

        DB::table('metodos_de_pago')->insert([

            "id" => 3,
            "nombre" => 'Tarjeta de Credito Nacional',
            "descripcion" => 'Tarjeta de Credito Nacional',
            "tiene_recargo" => false,
            
        ]);

        DB::table('metodos_de_pago')->insert([

            "id" => 4,
            "nombre" => 'Tarjeta de Crédito Internacional VISA',
            "descripcion" => 'Tarjeta de Crédito Internacional VISA',
            "tiene_recargo" => false,
            
        ]);

        DB::table('metodos_de_pago')->insert([

            "id" => 5,
            "nombre" => 'Transferencia Bancaria',
            "descripcion" => 'transferencia Bancaria',
            "tiene_recargo" => false,
            
        ]);
    }
}
