<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBilheteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bilhete', function ($table) {
            $table->boolean('pago');
            $table->string('codigo_pagamento');
            $table->string('origem');
            $table->timestamp('data_utilizacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bilhete', function ($table) {
            $table->dropColumn('pago');
            $table->dropColumn('codigo_pagamento');
            $table->dropColumn('origem');
            $table->dropColumn('data_utilizacao');
        });
    }
}
