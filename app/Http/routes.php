<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', ['as' => 'agenda.index', 'uses' => 'AgendaController@index']);

$app->get('/{letra}', ['as' => 'agenda.letra', 'uses' => 'AgendaController@index']);

$app->post('/', ['as' => 'agenda.nome', 'uses' => 'AgendaController@getByName']);

$app->get('deleta/telefone/{id}', ['as' => 'agenda.deleta.telefone', 'uses' => 'AgendaController@deleteTelefone']);

$app->get('deleta/pessoa/{id}', ['as' => 'agenda.deleta.pessoa', 'uses' => 'AgendaController@deletePessoa']);
