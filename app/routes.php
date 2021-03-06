<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/authtest', array('before' => 'auth.basic', function(){
	return View::make('hello');
}));


Route::get('usuarios',array('uses' => 'UsuarioController@getUsuario'));
Route::get('/usuarios/create',array('uses' => 'UsuarioController@create'));
Route::get('/', 'UsuarioController@getUsuario');
Route::resource('usuarios' , 'UsuarioController');