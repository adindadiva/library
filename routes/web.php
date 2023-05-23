<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/katalog', function () {
    return view('katalog', [
        'books' => Book::all()
    ]);
});

Route::get('/detail/{book:id}', [BookController::class, 'show']);

Route::get('/pinjam', function () {
    return view('pinjam');
});
Route::get('/peminjaman', function () {
    return view('peminjaman');
});