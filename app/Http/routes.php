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


/***
 * Pessoa
 */
$app->get('/contato/novo', ['as' => 'pessoa.create', 'uses' => 'PessoaController@create']);
$app->post('/contato', ['as' => 'pessoa.store', 'uses' => 'PessoaController@store']);

$app->get('/contato/editar/{id}', ['as' => 'pessoa.edit', 'uses' => 'PessoaController@edit']);
$app->put('/contato/alterar/{id}', ['as' => 'pessoa.update', 'uses' => 'PessoaController@update']);

$app->get('/deleta/pessoa/{id}', ['as' => 'pessoa.delete', 'uses' => 'PessoaController@delete']);
$app->delete('/deleta/pessoa/{id}', ['as' => 'pessoa.destroy', 'uses' => 'PessoaController@destroy']);


/**
 * Telefone
 */
$app->get('/telefone/novo/{id}', ['as' => 'telefone.create', 'uses' => 'TelefoneController@create']);
$app->post('/telefone', ['as' => 'telefone.store', 'uses' => 'TelefoneController@store']);

$app->get('/telefone/editar/{id}', ['as' => 'telefone.edit', 'uses' => 'TelefoneController@edit']);
$app->put('/telefone/{id}', ['as' => 'telefone.update', 'uses' => 'TelefoneController@update']);

$app->get('/deleta/telefone/{id}', ['as' => 'telefone.delete', 'uses' => 'TelefoneController@delete']);
$app->delete('/deleta/telefone/{id}', ['as' => 'telefone.destroy', 'uses' => 'TelefoneController@destroy']);
