<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AuthController;
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
Route::controller(AuthController::class)->group(function()
{
    Route::get('register', 'register');
    Route::get('login', 'login');
    Route::post('registerPost', 'register_post')->name('registerPost');
});
Route::get('user', function () {
    return view('user');
});
Route::get('admin', function () {
    return view('layout.main');
});


// Route::get('/login', function () {
//     return view('form.login');
// });
// Route::get('/register', function () {
//     return view('form.signin');
// });