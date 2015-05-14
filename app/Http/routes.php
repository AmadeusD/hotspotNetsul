<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as'=>'Login', 'uses'=>'HomeController@index']);

//Rota para registrar novo usuário normal - não cliente da Netsul
Route::get('cadastro', ['as'=>'Cadastro', 'uses'=>'CadastroController@index']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
