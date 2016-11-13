<?php

$factory->define(App\Utilizador::class,function(Faker\Generator $faker)
{
	return [
	'name'=>$faker->name, 
	'email'=>$faker->unique()->safeEmail,
	'tipo_utilizador_id'=>'2',
	'password'=>bcrypt('secret'),
	 'remember_token' => str_random(10),
	];
});
