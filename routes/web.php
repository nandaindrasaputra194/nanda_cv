<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

// Langsung arahkan ke halaman CV saat buka localhost:8000
Route::get('/', function () {
    return redirect('/cv');
});

Route::get('/cv', [CVController::class, 'index'])->name('cv');

Route::get('/cv', [CvController::class, 'showCv']);