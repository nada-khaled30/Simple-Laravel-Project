<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index'])->middleware('auth');
Route::get('/post/{id}', [PostController::class, 'show'])->middleware('auth');
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');
Route::get('/post/{id}/edit', [PostController::class, 'edit'])->middleware('auth');
Route::put('/post/{id}', [PostController::class, 'update'])->middleware('auth');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
