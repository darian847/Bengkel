<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\InputController;
use App\Models\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts/{id}', [PostController::class, 'show']);
// Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);

// POST CONTROLLER
Route::view('/homebuat', 'homebuat');
Route::view('/buat', 'buat');
Route::get('/posts/index', [PostController::class, 'index']);
Route::post('/buat', [PostController::class, 'storea'])->name('store.buat');
Route::put('/posts/createa/{post}', [PostController::class, 'updatea'])->name('update.createa');
Route::put('/buata/{labela}', [PostController::class, 'updateas'])->name('update.buata');
Route::get('/buata/{labela}', [PostController::class, 'showa']);
Route::get('/posts/indexa', [PostController::class, 'indexa']);
Route::resource('posts', PostController::class);


// SPK
// Route::resource('inputs', InputController::class);
// Route::view('/searchnormal', 'searchnormal');
// Route::view('/searchlabela', 'searchlabela');
// Route::view('/searchlabelb', 'searchlabela');
// Route::view('/searchlabelpt', 'searchlabelpt');
// Route::view('/searchlabelsbd', 'searchlabelsbd');
// Route::view('/spk', 'formspk');
// Route::view('/spm', 'formspm');
// Route::get('/posts/createa', [PostController::class, 'createa']);
// Route::get('/inputs/buata', [InputController::class, 'buata']);
// Route::get('/inputs/buata', [InputController::class, 'indexa']);
