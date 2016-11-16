
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
        DB::table('utilizador')->insert([
            'name' => 'admin',
            'email' => 'info@dugongo.co.mz',
            'tipo_utilizador_id' => 1,
            'password' => bcrypt('654321'),
        ]);
        //Gerar user a paritr de um model factory
        $utilizdor = factory(App\Utilizador::class)->create();
    }
}
