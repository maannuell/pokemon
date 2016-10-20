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

/*Route::get('/', function () {
    return view('principal');
});*/

/*Route::get('inicio', function(){
	return view ('principal');
});
*/
//Route::get('/consultarpokemon','PokemonController@consultar');
Route::get('/consultartipos','TiposController@consultar');
Route::get('/consultarpokemon/{id}','TiposController@consulta');
//Route::get('/agregarcaramelos/{id}','PokemonController@agregar');

Route::post('/actualizaritems','ItemsController@actualizar');
Route::get('/editaritems','ItemsController@editar');

Route::get('/agregarcaramelos/{idpc}','PokemonController@editar');
Route::post('actualizarcaramelos/{id}','PokemonController@actualizar');

Route::get('actualizarpoder/{id}','PokemonController@actualizapode');

Route::get('/generarpdfPokemons','PokemonController@pdf');