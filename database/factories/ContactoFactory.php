<?php

$factory->define(App\Contacto::class,function(Faker\Generator $faker)
{
	return[
		'nome'=>$faker->name,
		'numero'=>'+25882000333'.$faker->unique()->randomDigit,
		'grupoenvio_id'=> function(array $contacto)
		{
			return App\GrupoEnvio::first()->id;
		}
	];
});