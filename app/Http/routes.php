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


Route::get("cadastro", ['as'=>'Register', 'uses'=>'CadastroController@index']);

/**
 * Rotas para cadastro e login comum não cliente da Netsul
 */
Route::get('c/cadastro', ['as'=>'CommonRegister', 'uses'=>'Register\RegisterCommonController@index']);
Route::post('c/cadastro', ['as'=>'CommonRegister', 'uses'=>'Register\RegisterCommonController@indexPost']);

/**
 * Rotas de cadastro e login por Facebook
 */
Route::get('facebook/', ['as'=>'FacebookRedirect', 'uses'=>'Register\RegisterFacebookController@FacebookRedirect']);
Route::get('facebook/cadastrar', ['as'=>'FacebookCallback', 'uses'=> 'Register\RegisterFacebookController@FacebookRegister']);
//Rota post do formulário de cadastro Face
Route::post('facebook/cadastrar', ['as'=>'FacebookPost', 'uses'=>'Register\RegisterFacebookController@FacebookRegisterPost']);



//Grupo das rotas filtradas por login
Route::group(['middleware' => 'auth'], function(){
    Route::get('painel', function(){
        echo "painel";
    });
});


Route::controllers([
	'password' => 'Auth\PasswordController',
    'register' => 'Register\RegisterFacebookController',
]);