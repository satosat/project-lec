<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/history', [TransactionController::class, 'index']);
Route::get('/readingList', [BookmarkController::class, 'index']);

// bawah ini jangan dihapus yaa
require __DIR__ . '/auth.php';
