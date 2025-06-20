<?php

use App\Http\Controllers\authController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('blog',[BlogController::class,'index']);
Route::put('blog/{id}',[BlogController::class,'update']);
Route::get('blog/{blog}',[BlogController::class,'show']);
Route::post('blog',[BlogController::class,'store']);
Route::delete('blog/{id}',[BlogController::class,'destroy']);
Route::get('blog-search',[BlogController::class,'search']);


Route::post('/register', [authController::class, 'register']);
Route::post('/login', [authController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [authController::class, 'logout']);