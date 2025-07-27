<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\NewsController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');