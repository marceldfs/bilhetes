<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Contacto;

class contactoTest extends TestCase
{
	 
    use DatabaseTransactions;
    //use WithoutMiddleware;
   
    /** @test */
   public function deveCriarContacto()
   {    
      //Logar um user
      $user = factory(App\Utilizador::class)->make();
      $this->actingAs($user);

        $this->call('POST','contacto',array(
            'grupo_id'=>1,
            'nome'=>'Yuri Wingester',
            'numero'=>'+258820007100' 
            ));

        //get the last book 
        $this->seeInDatabase('contacto',['nome'=>'Yuri Wingester','numero'=>'+258820007100']);
   }

   /** @test */
   public function naoDeveCriarContactoSemNumero()
   {
       //Logar um user
      $user = factory(App\Utilizador::class)->make();
      $this->actingAs($user);
      
      $this->call('POST','contacto',array(
            'grupo_id'=>1,
            'nome'=>'Yuri Wingester',
            'numero'=>' '
            ));
      $resultsDB = Contacto::where('nome','Yuri Wingester')->count();
      $this->assertEquals(0,$resultsDB);
   }

  
   public function deveBuscarTodosContactosPorGrupoID()
   {  
      //Logar um user
      $user = factory(App\Utilizador::class)->make();
      $this->actingAs($user);

      //Criar os 5 contactos 
      $contactos_criar = factory(App\Contacto::class,4)->create();

      //Verificar se o request recebe a respota HTTP 200
      $this -> call('GET','contacto',array('id'=>1));
      //$this->action('GET','ContactoController@index',['id'=>1]);
      $this -> assertResponseOk();

      //Verificar se a VIEW recebe uma varial de nome $contactos
      $this -> assertViewHas('contactos');

      //Nao nos interessa o valor retornado mas sim o tipo 
      $contactos = $response->original->getData()['contactos'];
      $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection',$contactos);
   }
}
