<?php


use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/books');

Route::get('/books', [BookController::class, 'index'])->name('home');
Route::get('/books/{id}', [BookController::class, 'show'])->name('show book');
Route::delete('/books/{id}', [BookController::class, 'delete'])->name('delete book');

Route::get('/checkout/{id}', [TransactionController::class, 'show'])->name('checkout');


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


// bawah ini jangan dihapus yaa
// require __DIR__ . '/auth.php';
