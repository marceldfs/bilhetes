<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evento')->insert([
        	'grupo_id' => 1,
        	'nome' => 'MORE JAZZ',
        	'local' => 'HOTEL POLANA',
        	'descricao'=> 'JAZZ AFRICA MOZ',
        	'data_hora'=> Carbon::now()->format('Y:m-d H:i:s'),
        	'created_at'=> Carbon::now()->format('Y:m-d H:i:s'),
        	'updated_at'=> Carbon::now()->format('Y:m-d H:i:s'),
        	]);

        DB::table('evento')->insert([
        	'grupo_id' => 1,
        	'nome' => 'ARMIN ONLY',
        	'local' => 'COCONUTS',
        	'descricao'=> 'TRANCE MUSIC WITH AVB',
        	'data_hora'=> Carbon::now()->format('Y:m-d H:i:s'),
        	'created_at'=> Carbon::now()->format('Y:m-d H:i:s'),
        	'updated_at'=> Carbon::now()->format('Y:m-d H:i:s'),
        	]);
    }
}
