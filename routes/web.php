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

route::get('/login',['as'=>'login','uses'=>'App\Http\Controllers\AuthController@login']);
route::post('/login','App\Http\Controllers\AuthController@authenticate');

Route::middleware(['auth'])->group(
    function(){
        route::get('/logout','App\Http\Controllers\AuthController@logout');

        route::get('/platforms','App\Http\Controllers\PlatformController@index');
        route::get('/platforms/create','App\Http\Controllers\PlatformController@create');
        route::post('/platforms/store','App\Http\Controllers\PlatformController@store');
        route::get('/platforms/edit/{id}','App\Http\Controllers\PlatformController@edit');
        route::put('/platforms/update/{id}','App\Http\Controllers\PlatformController@update');
        route::delete('/platforms/delete/{id}','App\Http\Controllers\PlatformController@destroy');

        route::get('/actors','App\Http\Controllers\ActorController@index');
        route::get('/actors/create','App\Http\Controllers\ActorController@create');
        route::post('/actors/store','App\Http\Controllers\ActorController@store');
        route::get('/actors/edit/{id}','App\Http\Controllers\ActorController@edit');
        route::put('/actors/update/{id}','App\Http\Controllers\ActorController@update');
        route::delete('/actors/delete/{id}','App\Http\Controllers\ActorController@destroy');

        route::get('/directors','App\Http\Controllers\DirectorController@index');
        route::get('/directors/create','App\Http\Controllers\DirectorController@create');
        route::post('/directors/store','App\Http\Controllers\DirectorController@store');
        route::get('/directors/edit/{id}','App\Http\Controllers\DirectorController@edit');
        route::put('/directors/update/{id}','App\Http\Controllers\DirectorController@update');
        route::delete('/directors/delete/{id}','App\Http\Controllers\DirectorController@destroy');

        route::get('/languages','App\Http\Controllers\LanguajeController@index');
        route::get('/languages/create','App\Http\Controllers\LanguajeController@create');
        route::post('/languages/store','App\Http\Controllers\LanguajeController@store');
        route::get('/languages/edit/{id}','App\Http\Controllers\LanguajeController@edit');
        route::put('/languages/update/{id}','App\Http\Controllers\LanguajeController@update');
        route::delete('/languages/delete/{id}','App\Http\Controllers\LanguajeController@destroy');

        route::get('/series','App\Http\Controllers\SerieController@index');
        route::get('/series/create','App\Http\Controllers\SerieController@create');
        route::post('/series/store','App\Http\Controllers\SerieController@store');
        route::get('/series/edit/{id}','App\Http\Controllers\SerieController@edit');
        route::put('/series/update/{id}','App\Http\Controllers\SerieController@update');
        route::delete('/series/delete/{id}','App\Http\Controllers\SerieController@destroy');
    }
);

