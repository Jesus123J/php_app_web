<?php


use App\Http\Controllers\Api\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/usuarios', [UsuarioController::class , 'index']);

Route::post('/save', [UsuarioController::class , 'store']);

Route::get('/', function () {
    return view('welcome');
});
