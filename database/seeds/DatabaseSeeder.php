<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GrupoTableSeeder::class);
        $this->call(TipoUtilizadorTableSeeder::class);
        $this->call(UtilizadorTableSeeder::class);
        $this->call(TipoBilheteTableSeeder::class);
        $this->call(EventoTableSeeder::class);
        $this->call(GrupoEnvioTableSeeder::class);
        $this->call(ContactoTableSeeder::class);
    }
}
