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
Route::get('/animals', 'AnimalController@showAnimals')->name('animals');
Route::get('/races', 'AnimalController@showRaces')->name('races');
Route::get('/createAnimal', 'AnimalController@createAnimal')->name('createAnimal');
Route::post('/storeAnimal', 'AnimalController@storeAnimal')->name('storeAnimal');