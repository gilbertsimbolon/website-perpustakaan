<?php

use App\Http\Controllers\LibraryInformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

