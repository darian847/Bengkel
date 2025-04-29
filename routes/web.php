<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\InputController;
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
Route::view('/homebuat', 'homebuat');
Route::view('/searchnormal', 'searchnormal');
Route::view('/searchlabela', 'searchlabela');
Route::view('/searchlabelb', 'searchlabela');
Route::view('/searchlabelpt', 'searchlabelpt');
Route::view('/searchlabelsbd', 'searchlabelsbd');
Route::resource('posts', PostController::class);
Route::resource('inputs', InputController::class);
