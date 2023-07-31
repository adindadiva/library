<?php


use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Petugas\BookController as BookController;
use App\Http\Controllers\Petugas\CategoryController;
use App\Http\Controllers\Petugas\PenerbitController;
use App\Http\Controllers\Petugas\TransaksiController;
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
    return view('layout.main');
});

// Route::controller(AuthController::class)->group(function()
// {
//     Route::get('register', 'register');
//     Route::get('login', 'login');
//     Route::post('registerPost', 'register_post')->name('registerPost');
// });
// Route::get('user', function () {
//     return view('user');
// });
Route::get('admin', function () {
    return view('petugas.dashboard.index');
});

Route::get('/category', CategoryController::class);


Route::get('/book', BookController::class);

Route::get('/book', PetugasBookController::class);

Route::get('/penerbit', PenerbitController::class);
Route::get('/transaksi', TransaksiController::Class);



// Route::get('/login', function () {
//     return view('form.login');
// });
// Route::get('/register', function () {
//     return view('form.signin');
// });