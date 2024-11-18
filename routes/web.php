<?php

use App\Http\Controllers\LibraryInformationController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LibraryInformationController::class, 'index'])->name('home');