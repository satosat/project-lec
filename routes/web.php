<?php

use App\Http\Controllers\BookDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-add', function () {
    return view('admin-add');
});

Route::post('/admin-add', [BookDetailController::class, 'addBook'])->name('addBook');


Route::get('/admin-edit', function () {
    return view('admin-edit');
});


// bawah ini jangan dihapus yaa
require __DIR__ . '/auth.php';
