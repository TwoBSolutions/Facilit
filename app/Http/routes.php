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

Route::group(['prefix' => '/'], function () {
    Route::get('', ['as' => 'index', 'uses' => 'MasterController@index']);
   
});


Route::group(['prefix' => 'api'], function () {
    Route::get('', ['as' => 'api.funcoes', 'uses' => 'ApiController@index']);
    Route::get('GetOrders', ['as' => 'api.getOrders', 'uses' => 'OrdemServicoController@getAll']);

	Route::group(['prefix' => 'condominio'], function () {
        Route::get('all', ['as' => 'condominio.all', 'uses' => 'CondominoController@getAll']);
        Route::get('blocos', ['as' => 'condominio.blocos', 'uses' => 'CondominoController@getBlocos']);
    	Route::get('itens/{area}', ['as' => 'condominio.blocos', 'uses' => 'CondominoController@getItens']);
    	Route::get('atualizar/{data}', ['as' => 'condominio.atualizar', 'uses' => 'CondominoController@atualizar']);   
	});

	Route::group(['prefix' => 'solicitacao'], function () {
    	Route::get('all', ['as' => 'solicitacao.all', 'uses' => 'SolicitacaoController@getAll']);
    	Route::get('atualizar/{data}', ['as' => 'condominio.atualizar', 'uses' => 'SolicitacaoController@Atualizar']);
   
	});
    Route::group(['prefix' => 'os'], function () {
        Route::get('all', ['as' => 'os.all', 'uses' => 'OrdemServicoController@getAll']);
        Route::post('create', ['as' => 'condominio.atualizar', 'uses' => 'OrdemServicoController@PutOrder']);
   
    });
   
   
});


// Route::get('/', function () {
//     return view('welcome');
// });
