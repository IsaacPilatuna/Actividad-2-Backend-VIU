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


route::get('/','App\Http\Controllers\PlatformController@home');
route::get('/plataformas','App\Http\Controllers\PlatformController@index');
route::get('/plataformas/create','App\Http\Controllers\PlatformController@create');
route::post('/plataformas/store','App\Http\Controllers\PlatformController@store');
route::get('/plataformas/edit/{id}','App\Http\Controllers\PlatformController@edit');
route::put('/plataformas/update/{id}','App\Http\Controllers\PlatformController@update');
route::delete('/plataformas/delete/{id}','App\Http\Controllers\PlatformController@destroy');

route::get('/actores','App\Http\Controllers\ActorController@index');
route::get('/actores/create','App\Http\Controllers\ActorController@create');
route::post('/actores/store','App\Http\Controllers\ActorController@store');
route::get('/actores/edit/{id}','App\Http\Controllers\ActorController@edit');
route::put('/actores/update/{id}','App\Http\Controllers\ActorController@update');
route::delete('/actores/delete/{id}','App\Http\Controllers\ActorController@destroy');

route::get('/directores','App\Http\Controllers\DirectorController@index');
route::get('/directores/create','App\Http\Controllers\DirectorController@create');
route::post('/directores/store','App\Http\Controllers\DirectorController@store');
route::get('/directores/edit/{id}','App\Http\Controllers\DirectorController@edit');
route::put('/directores/update/{id}','App\Http\Controllers\DirectorController@update');
route::delete('/directores/delete/{id}','App\Http\Controllers\DirectorController@destroy');

route::get('/lenguajes','App\Http\Controllers\LanguajeController@index');
route::get('/lenguajes/create','App\Http\Controllers\LanguajeController@create');
route::post('/lenguajes/store','App\Http\Controllers\LanguajeController@store');
route::get('/lenguajes/edit/{id}','App\Http\Controllers\LanguajeController@edit');
route::put('/lenguajes/update/{id}','App\Http\Controllers\LanguajeController@update');
route::delete('/lenguajes/delete/{id}','App\Http\Controllers\LanguajeController@destroy');

route::get('/series','App\Http\Controllers\SerieController@index');
route::get('/series/create','App\Http\Controllers\SerieController@create');
route::post('/series/store','App\Http\Controllers\SerieController@store');
route::get('/series/edit/{id}','App\Http\Controllers\SerieController@edit');
route::put('/series/update/{id}','App\Http\Controllers\SerieController@update');
route::delete('/series/delete/{id}','App\Http\Controllers\SerieController@destroy');
