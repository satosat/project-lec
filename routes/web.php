<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::redirect('/', '/books');

Route::get('/books', [BookController::class, 'index'])->name('home');


// bawah ini jangan dihapus yaa
require __DIR__ . '/auth.php';
