<?php

use Illuminate\Database\Seeder;

class ContactoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contacto = factory(App\Contacto::class,5)->create();
    }
}
