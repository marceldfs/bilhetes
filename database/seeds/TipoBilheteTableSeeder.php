<?php

use Illuminate\Database\Seeder;

class TipoBilheteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_bilhete')->insert([
            'descricao' => 'Normal',
        ]);
        
        DB::table('tipo_bilhete')->insert([
            'descricao' => 'Vip',
        ]);
    }
}
