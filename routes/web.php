<?php

use Illuminate\Support\Facades\Route;

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
    return view("auth.login");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/foyer', 'FoyerController');
Route::resource('/propriete', 'ProprieteController');
Route::resource('/details', 'DetailsController');
Route::resource('/structure', 'StructureController');
Route::resource('/membre', 'MembreController');
Route::get('/proprietes/{id}', 'ProprieteController@getPropriete');
Route::get('/detail/{id}', 'DetailsController@getPropriete');
Route::get('/structures/{id}', 'StructureController@getPropriete');
Route::get('/membres/{id}', 'MembreController@getPropriete');
Route::get('/tombes/{id}', 'TombeController@getPropriete');
