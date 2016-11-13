<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Contacto;

class contactoTest extends TestCase
{
	use DatabaseMigrations;
   
    /** @test */
   public function deveCriarContacto()
   {    
        $this->call('POST','contacto',array(
            'grupo_id'=>1,
            'nome'=>'Yuri Wingester',
            'numero'=>'+258820007100', 
            ));
        //get the last book 
        $this->seeInDatabase('contacto',['nome'=>'Yuri Wingester']);
   }
}
