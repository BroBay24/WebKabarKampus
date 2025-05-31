<?php

use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
