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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/client','ClientController@index')->name('client');
Route::get('/view','ClientController@view')->name('view');
///
Route::get('clients','ClientController@clients');
Route::get('clients/{client}', 'ClientController@show');
Route::post('create', 'ClientController@store')->name('create.client');
Route::post('update/clients/{id}', 'ClientController@update');
Route::get('edit/client/{id}', 'ClientController@edit');
Route::delete('clients/{id}', 'ClientController@delete')->name('delete.client');
//
Route::get('contrats','ContratController@contrats');
Route::get('contrats/{contrat}', 'ContratController@show');
Route::post('contrats', 'ContratController@store');
Route::put('contrats/{contrat}', 'ContratController@update');
Route::delete('contrats/{contrat}', 'ContratController@delete');
//
Route::get('marques','MarqueController@marques');
Route::get('marques/{marque}', 'MarqueController@show');
Route::post('marques', 'MarqueController@store');
Route::put('marques/{marques}', 'MarqueController@update');
Route::delete('marques/{marque}', 'MarqueController@delete');
//
Route::get('modeles','ModeleController@modeles');
Route::get('modeles/{modele}', 'ModeleController@show');
Route::post('modeles', 'ModeleController@store');
Route::put('modeles/{modeles}', 'ModeleController@update');
Route::delete('modeles/{modele}', 'ModeleController@delete');
//
Route::get('vehicules','VehiculeController@vehicules');
Route::get('vehicules/{vehicule}', 'VehiculeController@show');
Route::post('vehicules', 'VehiculeController@store');
Route::put('vehicules/{vehicules}', 'VehiculeController@update');
Route::delete('vehicules/{vehicules}', 'VehiculeController@delete');
//
Route::get('employees','EmployeeController@employees');
Route::get('employees/{employee}', 'EmployeeControlle@show');
Route::post('employees', 'EmployeeControlle@store');
Route::put('employees/{employees}', 'EmployeeControlle@update');
Route::delete('employees/{employees}', 'EmployeeControlle@delete');
//
Route::get('agences','AgenceController@agences');
Route::get('agences/{agence}', 'AgenceController@show');
Route::post('agences', 'AgenceController@store');
Route::put('agences/{agences}', 'AgenceController@update');
Route::delete('agences/{agences}', 'AgenceController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
