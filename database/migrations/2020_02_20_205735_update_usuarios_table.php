<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //SI ES PRIMERA VEZ SACAR COMENTARIOS
        Schema::table('usuarios', function($table)
        {
            
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->string('remember_me', 100)->nullable()->change();
            $table->renameColumn('remember_me' , 'remember_token');
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
    }
}
