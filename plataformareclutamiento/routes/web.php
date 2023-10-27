<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CandidatosController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    // Rutas de administracion

    Route::get('/candidatos/estudios','App\Http\Controllers\CandidatosController@estudios');
    Route::post('/candidatos/agregarestudio','App\Http\Controllers\CandidatosController@agregarestudio');
    Route::resource('/sistema', App\Http\Controllers\SistemaController::class);
    Route::resource('/cliente', App\Http\Controllers\ClienteController::class);
    Route::resource('/pais', App\Http\Controllers\PaisController::class);
    Route::resource('/regions', App\Http\Controllers\RegionsController::class);
    Route::resource('/candidatos', App\Http\Controllers\CandidatosController::class);
    Route::resource('/home', App\Http\Controllers\HomeController::class);
    Route::get('/cliente/{pais}/regiones','App\Http\Controllers\ClienteController@regiones');
    Route::get('/cliente/{region}/comunas','App\Http\Controllers\ClienteController@comunas');
    Route::get('/candidatos/{pais}/regiones','App\Http\Controllers\CandidatosController@regiones');
    Route::get('/candidatos/{region}/comunas','App\Http\Controllers\CandidatosController@comunas');

});

// Rutas publicas

Route::get('/', [App\Http\Controllers\InicioController::class, 'index'])->name('home');
Route::get('/cliente/{pais}/regiones','App\Http\Controllers\ClienteController@regiones');
