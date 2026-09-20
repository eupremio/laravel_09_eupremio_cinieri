<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])
    ->name('home');

Route::get('/posts', [PublicController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/create', [PublicController::class, 'create'])
    ->name('posts.create');

Route::post('/posts', [PublicController::class, 'store'])
    ->name('posts.store');