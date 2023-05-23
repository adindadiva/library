<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return view('katalog', [
            'books' => Book::all()
        ]);
    }

    public function show($id) {
        return view('detail', [
            'book' => Book::find($id)
        ]);
    }
}
