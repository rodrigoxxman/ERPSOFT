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

Route::get('/test', 'testController@test');

Route::get('/test1', 'testController@anotherFunction');

Route::group(
[
    'prefix' => 'oportunidads',
], function () {

    Route::get('/', 'OportunidadsController@index')
         ->name('oportunidads.oportunidad.index');

    Route::get('/create','OportunidadsController@create')
         ->name('oportunidads.oportunidad.create');

    Route::get('/show/{oportunidad}','OportunidadsController@show')
         ->name('oportunidads.oportunidad.show')
         ->where('id', '[0-9]+');

    Route::get('/{oportunidad}/edit','OportunidadsController@edit')
         ->name('oportunidads.oportunidad.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'OportunidadsController@store')
         ->name('oportunidads.oportunidad.store');

    Route::put('oportunidad/{oportunidad}', 'OportunidadsController@update')
         ->name('oportunidads.oportunidad.update')
         ->where('id', '[0-9]+');

    Route::delete('/oportunidad/{oportunidad}','OportunidadsController@destroy')
         ->name('oportunidads.oportunidad.destroy')
         ->where('id', '[0-9]+');

});

  Route::get('/respuesta', function(){
    return view('response');
  });
  Route::get('activacion/{code}', 'UserController@activate');

  Route::post('complete/{id}', 'UserController@complete');
