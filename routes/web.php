<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts/{id}', [PostController::class, 'show']);
// Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);

Route::view('/', 'home');
Route::resource('posts', PostController::class);

