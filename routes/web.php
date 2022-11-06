<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/books');

Route::get('/books', [BookController::class, 'index'])->name('home');
Route::get('/books/{id}', [BookController::class, 'show'])->name('show book');
Route::delete('/books/{id}', [BookController::class, 'delete'])->name('delete book');

Route::get('/checkout/{id}', [TransactionController::class, 'show'])->name('checkout');


// bawah ini jangan dihapus yaa
require __DIR__ . '/auth.php';
