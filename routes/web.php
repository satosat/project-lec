<?php


use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\BookDetailController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

Route::get('/admin-add', function () {
    return view('admin-add');
})->middleware('admin');

Route::post('/admin-add', [BookDetailController::class, 'addBook'])->name('addBook')->middleware('admin');


Route::get('/admin-edit', function () {
    return view('admin-edit');
})->middleware('admin');

Route::get('/history', [TransactionController::class, 'index'])->middleware('auth');
Route::get('/readingList', [BookmarkController::class, 'index'])->middleware('auth');


Route::redirect('/', '/books');

Route::get('/books', [BookController::class, 'index'])->name('home')->middleware('auth');
Route::get('/books/{id}', [BookController::class, 'show'])->name('show book')->middleware('auth');
Route::delete('/books/{id}', [BookController::class, 'delete'])->name('delete book')->middleware('auth');

Route::get('/checkout/{id}', [TransactionController::class, 'show'])->name('checkout')->middleware('auth');


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');



// bawah ini jangan dihapus yaa
// require __DIR__ . '/auth.php';
