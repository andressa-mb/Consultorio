<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/users', function(){
    return User::get();
});

Route::get('/me', fn (Request $request) => $request->user())
    ->middleware('auth:sanctum');

