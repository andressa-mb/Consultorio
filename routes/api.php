<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/users', function(){
    return User::get();
});

Route::get('/me', fn (Request $request) => $request->user())
    ->middleware('auth:sanctum');

//Lista de usuários
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user/{user}', 'App\Http\Controllers\UserController@show');
    Route::get('/listEmployees', 'App\Http\Controllers\UserController@listEmployees');
    Route::get('/listUsers', 'App\Http\Controllers\UserController@listUsers');
});
