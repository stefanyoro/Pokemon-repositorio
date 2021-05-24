<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// POKEMONES
	Route::get('Seleccion/{id}', 'PokemonControlador@Pagina_principal');
	Route::get('Partida', 'PokemonControlador@Partida_pagina');
	Route::post('CrearPartida', 'PokemonControlador@RegistrarPartida');
	Route::post('SeleccionPokemon/{id}', 'PokemonControlador@SeleccionPokemon');
	Route::get('Batalla', 'PokemonControlador@Batalla');
	Route::post('TerminarPartida', 'PokemonControlador@CulminarPartida');
// POKEMONES
