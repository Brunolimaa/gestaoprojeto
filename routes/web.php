<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
| Teste Edição
|
*/

$app->get('/', ['as' => 'projeto.index', 'uses'=>'indexController@index']);


$app->get('/painel', ['as' => 'projeto.teste', 'uses'=>'indexController@teste']);

$app->get('/login', ['as' => 'projeto.login', 'uses' => 'indexController@login']);