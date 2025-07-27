<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthorController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/author/{username}', [AuthorController::class, 'show'])->name('author.show');

Route::get('/{slug}', [NewsController::class, 'category'])->name('news.category');