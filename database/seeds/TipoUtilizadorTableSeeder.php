<?php

use Illuminate\Database\Seeder;

class TipoUtilizadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_utilizador')->insert([
            'grupo_id' => 1,
            'descricao' => 'Administrador',
        ]);
        
        DB::table('tipo_utilizador')->insert([
            'grupo_id' => 1,
            'descricao' => 'Gestor de Evento',
        ]);
    }
}
