<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EventoControllerTest extends TestCase
{

	use DatabaseTransactions;
    
    public function testEventoStore()
    {
    	Evento::create([]);
    }
}
