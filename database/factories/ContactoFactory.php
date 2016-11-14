<?php

$factory->define(App\Contacto::class,function(Faker\Generator $faker)
{
	return[
		'nome'=>$faker->name,
		'numero'=>'+25882000333'.$faker->unique()->randomDigit,
		'grupo_id'=>'1',
	];
});