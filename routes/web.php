<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');


Route::put('/posts/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');

Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');

Route::get('/posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');

Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::delete('/posts/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');

