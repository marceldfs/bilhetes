<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilizadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilizador', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->integer('tipo_utilizador_id')->unsigned();
            $table->string('senha');
            $table->rememberToken();
            $table->timestamps(); 
        });
        
        Schema::table('utilizador', function(Blueprint $table) {
            $table->foreign('tipo_utilizador_id')->references('id')->on('tipo_utilizador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilizador');
    }
}
