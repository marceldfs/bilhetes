<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('utilizador_id')->unsigned();
            $table->string('nome');
            $table->string('local');
            $table->string('descricao');
            $table->timestamp('data_hora')->nullable();
            $table->timestamps();
        });
        
        Schema::table('evento', function(Blueprint $table) {
            $table->foreign('utilizador_id')->references('id')->on('utilizador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}
