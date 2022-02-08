<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\platformController;

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

Route::view('/','authentication');

Route::post('/', function ()
{
$datosLogin = request()->only('email','password');

if (Auth::attempt($datosLogin))
{
    return view('index');
}else {

    echo "<h1>Usuario no existe</h1>";
    return view('authentication');
}
});

Route::get("/platform",[platformController::class,'index']);
