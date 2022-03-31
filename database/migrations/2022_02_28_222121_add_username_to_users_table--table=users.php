<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(table:'users', callback:function(Blueprint $table ){
            $table->string('username')->unique();
        });

        Schema::table(table:'users', callback:function(Blueprint $table ){
            $table->string('apellido');
        });

        Schema::table(table:'users', callback:function(Blueprint $table ){
            $table->string('tipodocumento');
        });

        Schema::table(table:'users', callback:function(Blueprint $table ){
            $table->string('ndocumento')->unique();
        });

        Schema::table(table:'users', callback:function(Blueprint $table ){
            $table->string('telefono')->unique();
        });

        Schema::table(table:'users', callback:function(Blueprint $table ){
            $table->string('celular')->unique();
        });

        Schema::table(table:'users', callback:function(Blueprint $table ){
            $table->string('direccion')->unique();
        });

        Schema::table(table:'users', callback:function(Blueprint $table ){
            $table->string('fechanacimiento');
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
};
