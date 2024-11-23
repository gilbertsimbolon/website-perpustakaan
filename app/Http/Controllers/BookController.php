<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(15); // Menampilkan 15 buku per halaman
        return view('home', compact('books'));
    }
}
