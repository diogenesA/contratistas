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
    return view('auth.login');
});

//Route::get('/contratistas','ContratistasController@index');
//Route::get('/contratistas/create','ContratistasController@create');

Route::resource('contratistas','App\Http\Controllers\ContratistasController')->middleware('auth');
Auth::routes();//['register'=>false, 'reset'=>false]

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
