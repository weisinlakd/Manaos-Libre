<?php

use Illuminate\Database\Seeder;

class EmpresasEnvio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\EmpresaEnvio::class, 50)->create();
    }
}
