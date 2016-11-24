<?php

$factory->define(App\GrupoEnvio::class,function(Faker\Generator $faker)
{
	return[
		'nome'=>$faker->name,		
		'grupo_id'=>'1',
	];
});