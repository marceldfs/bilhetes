<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilheteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilhete', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evento_id')->unsigned();
            $table->integer('tipo_bilhete_id')->unsigned();
            $table->string('chave');
            $table->boolean('usado');
            $table->timestamps();
        });
        
        Schema::table('bilhete', function(Blueprint $table) {
            $table->foreign('evento_id')->references('id')->on('evento');
        });
        
        Schema::table('bilhete', function(Blueprint $table) {
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
        Schema::dropIfExists('bilhete');
    }
}
