<?php

use Illuminate\Database\Seeder;

class MetodosEnvio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\MetodoEnvio::class, 100)->create();
    }
}
