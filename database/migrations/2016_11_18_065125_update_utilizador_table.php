<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUtilizadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utilizador', function ($table) {
            $table->integer('grupo_id')->unsigned()->default(1);
        });
        
        Schema::table('utilizador', function(Blueprint $table) {
            $table->foreign('grupo_id')->references('id')->on('grupo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utilizador', function ($table) {
            $table->dropColumn('grupo_id');
        });
    }
}
