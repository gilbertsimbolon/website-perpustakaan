<?php

namespace App\Http\Controllers;

use App\Models\LibraryInformation;
use Illuminate\Http\Request;

class LibraryInformationController extends Controller
{
    public function index()
    {
    $library = LibraryInformation::first();
    return view('library.index', compact('library'));
    }
}
