
<?php

use Illuminate\Database\Seeder;

class UtilizadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'admin',
            'email' => 'info@dugongo.co.mz',
            'tipo_utilizador_id' => 1,
            'senha' => bcrypt('654321'),
        ]);
    }
}
