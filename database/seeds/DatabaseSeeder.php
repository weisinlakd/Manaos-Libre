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
    
        //¡SI ES PRIMERA VEZ SACAR COMENTARIOS A TODO Y EJECUTAR!


        // factory(App\EmpresaEnvio::class, 50)->create();
        factory(App\MetodoEnvio::class, 100)->create();
    }
}
