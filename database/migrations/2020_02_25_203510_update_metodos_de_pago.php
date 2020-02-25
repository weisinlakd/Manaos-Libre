<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMetodosDePago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('metodos_de_pago', function($table) {
            $table->dropPrimary();
            $table->dropColumn('id');
            $table->integer('id')->autoIncrement();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('metodos_de_pago', function($table) {

            $table->integer('id')->autoIncrement();
        });
    }
}
