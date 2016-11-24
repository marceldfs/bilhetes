<?php

use Illuminate\Database\Seeder;

class GrupoEnvioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $grupoenvio = factory(App\GrupoEnvio::class,2)->create();
    }
}
