<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->paginate(10);

        return view('components.buku-section', ['books' => $books]);
    }
}
