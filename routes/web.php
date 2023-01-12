<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\BookDetailController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Transaction
Route::get('/history', [TransactionController::class, 'index'])->middleware('auth')->name('history');
Route::post('/checkout', [TransactionController::class, 'store'])->name('checkout');

// Bookmark
Route::get('/readingList', [BookmarkController::class, 'index'])->middleware('auth');
Route::post('/bookmarks', [BookmarkController::class, 'store'])->name('addBookmark')->middleware('auth');


// Books
Route::redirect('/', '/books');

Route::get('/books', [BookController::class, 'index'])->name('home')->middleware('auth');
Route::get('/books/{id}', [BookController::class, 'show'])->name('show book')->middleware('auth');
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('delete book')->middleware('auth');

Route::get('/updateDetail/{id}', [BookDetailController::class, 'edit'])->name('update');
Route::put('/updateDetail/{id}', [BookDetailController::class, 'update'])->name('updateDetail');
Route::get('/admin-add', [BookDetailController::class, 'create'])->middleware('admin');
Route::post('/admin-add', [BookDetailController::class, 'store'])->name('addBook')->middleware('admin');
Route::get('/admin-edit', [BookDetailController::class, 'edit'])->middleware('admin');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
