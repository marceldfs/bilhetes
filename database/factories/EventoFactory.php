<?php

$factory->define(App\Evento::class,function(Faker\Generator $faker){
	return	[
		'grupo_id' => 2,
		'nome' => 'Good Times',
		'local' => 'My House',
		'descricao'=>'Girls Free',
		'data_hora'=>'2016-10-26 09:55:03',
		'created_at'=>'2016-10-26 09:55:03',
		'updated_at'=>'2016-10-26 09:55:03',
	];

});