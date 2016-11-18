<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEventoTipoBilhete2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evento_tipo_bilhete', function ($table) {
            $table->boolean('com_cartaz');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evento_tipo_bilhete', function ($table) {
            $table->dropColumn('com_cartaz');
        });
    }
}
