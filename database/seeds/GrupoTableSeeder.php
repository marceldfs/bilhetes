<?php

use Illuminate\Database\Seeder;

class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupo')->insert([
            'descricao' => 'padrao',
        ]);
    }
}
