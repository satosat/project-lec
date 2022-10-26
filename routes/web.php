<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// bawah ini jangan dihapus yaa
require __DIR__ . '/auth.php';
