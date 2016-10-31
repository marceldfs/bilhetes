<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTipoBilheteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento_tipo_bilhete', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evento_id')->unsigned();
            $table->integer('tipo_bilhete_id')->unsigned();
            $table->integer('quantidade');
            $table->string('fundo');
            $table->timestamps();
        });
        
        Schema::table('evento_tipo_bilhete', function(Blueprint $table) {
            $table->foreign('evento_id')->references('id')->on('evento');
        });
        
        Schema::table('evento_tipo_bilhete', function(Blueprint $table) {
            $table->foreign('tipo_bilhete_id')->references('id')->on('tipo_bilhete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento_tipo_bilhete');
    }
}
