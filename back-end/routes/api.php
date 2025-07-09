<?php


use App\Http\Controllers\Api\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::post('/save', [UsuarioController::class , 'store']);

