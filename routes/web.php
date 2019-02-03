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


//Registrar
Route::get('/home','userInformationController@ShowInsert')->name('MostrarInsert');
Route::post('/Insert','userInformationController@Insert')->name('Insert');

//Actualizar
Route::get('/home','userInformationController@ShowUpdate')->name('MostrarUpdate');
Route::post('Update','userInformationController@Update')->name('Actualizar');

//Eliminar
Route::get('/home','userInformationController@ShowDelete')->name('MostrarDelete');
Route::post('/Delete','userInformationController@Delete')->name('Eliminar');

//Listar
Route::get('home','userInformationController@showList')->name('ListaUserInf');