<?php

Route::get('/', 'HomeController@index');

Auth::routes();


Route::get('/export_excel', 'ExportExcelController@index');
Route::get('/export/{type}', 'ExportExcelController@export');

//zona de pruebas
Route::get('/zonapruebas', 'testController@test');
//fin de zona de pruebas

Route::get('/home', 'HomeController@index')->name('home');

Route::group(
[
    'prefix' => 'oportunidads',
], function () {

    Route::get('/', 'OportunidadsController@index')
         ->name('oportunidads.oportunidad.index')
         ->middleware('auth');

    Route::get('/create','OportunidadsController@create')
         ->name('oportunidads.oportunidad.create')
         ->middleware('auth');

    Route::get('/show/{oportunidad}','OportunidadsController@show')
         ->name('oportunidads.oportunidad.show')
         ->where('id', '[0-9]+')
         ->middleware('auth');

    Route::get('/{oportunidad}/edit','OportunidadsController@edit')
         ->name('oportunidads.oportunidad.edit')
         ->where('id', '[0-9]+')
         ->middleware('auth');

    Route::post('/', 'OportunidadsController@store')
         ->name('oportunidads.oportunidad.store')
         ->middleware('auth');

    Route::put('oportunidad/{oportunidad}', 'OportunidadsController@update')
         ->name('oportunidads.oportunidad.update')
         ->where('id', '[0-9]+')
         ->middleware('auth');

    Route::delete('/oportunidad/{oportunidad}','OportunidadsController@destroy')
         ->name('oportunidads.oportunidad.destroy')
         ->where('id', '[0-9]+')
         ->middleware('auth');

    Route::get('/exportar', 'OportunidadsController@exportar')
         ->name('oportunidads.oportunidad.exportar')
         ->middleware('auth');
});


  Route::get('/respuesta', function(){
    return view('response');
  });
  Route::get('activacion/{code}', 'UserController@activate');

  Route::post('complete/{id}', 'UserController@complete');

Route::group(
[
    'prefix' => 'users',
], function () {

    Route::get('/', 'UsersController@index')
         ->name('users.users.index')
         ->middleware('auth');

    Route::get('/show/{users}','UsersController@show')
         ->name('users.users.show')
         ->where('id', '[0-9]+')
         ->middleware('auth');

    Route::get('/{users}/edit','UsersController@edit')
         ->name('users.users.edit')
         ->where('id', '[0-9]+')
         ->middleware('auth');
               
    Route::put('users/{users}', 'UsersController@update')
         ->name('users.users.update')
         ->where('id', '[0-9]+')
         ->middleware('auth');

    Route::delete('/users/{users}','UsersController@destroy')
         ->name('users.users.destroy')
         ->where('id', '[0-9]+')
         ->middleware('auth');

});
