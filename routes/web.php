<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/servicos', function(){
	return view ('pages.servicos');
});


//Route::post('login', '\App\Http\Controllers\Auth\LoginController@postLogin');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('evento/home','EventoController@home');

Route::resource('evento','EventoController');

Route::resource('grupo','GrupoController');

Route::resource('bilhetes','EventoTipoBilheteController');

Route::get('bilhete/{id}','BilheteController@index');

Route::get('bilhete/showTicket/{chave}','BilheteController@showPdf');

Route::get('bilhete/readTicket/{chave}','BilheteController@read');

Route::get('bilhetes/clean/{id}','EventoTipoBilheteController@clean');

Route::get('mensagem/home','ContactoController@home');

Route::get('contacto/{id}','ContactoController@index');

Route::resource('contacto','ContactoController');

