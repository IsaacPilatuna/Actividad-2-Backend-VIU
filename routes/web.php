<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\SerieController;


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
Route::prefix('login')->group(function(){
    route::get('/',['as'=>'login','uses'=>'App\Http\Controllers\AuthController@login']);
    route::post('/','App\Http\Controllers\AuthController@authenticate');
});


Route::middleware(['auth'])->group(
    function(){
        route::get('/logout','App\Http\Controllers\AuthController@logout');

        Route::controller(PlatformController::class)->prefix('platforms')->group(function(){
            route::get('/','index');
            route::get('/create','create');
            route::post('/store','store');
            route::get('/edit/{id}','edit');
            route::put('/update/{id}','update');
            route::delete('/delete/{id}','destroy');
        });

        Route::controller(ActorController::class)->prefix('actors')->group(function(){
            route::get('/','index');
            route::get('/create','create');
            route::post('/store','store');
            route::get('/edit/{id}','edit');
            route::put('/update/{id}','update');
            route::delete('/delete/{id}','destroy');
        });

        Route::controller(DirectorController::class)->prefix('directors')->group(function(){
            route::get('/','index');
            route::get('/create','create');
            route::post('/store','store');
            route::get('/edit/{id}','edit');
            route::put('/update/{id}','update');
            route::delete('/delete/{id}','destroy');
        });

        Route::controller(LanguajeController::class)->prefix('languages')->group(function(){
            route::get('/','index');
            route::get('/create','create');
            route::post('/store','store');
            route::get('/edit/{id}','edit');
            route::put('/update/{id}','update');
            route::delete('/delete/{id}','destroy');
        });

        Route::controller(SerieController::class)->prefix('series')->group(function(){
            route::get('/','index');
            route::get('/create','create');
            route::post('/store','store');
            route::delete('/delete/{id}','destroy');
        });


    }
);

