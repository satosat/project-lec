<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ReadingListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/history', [HistoryController::class, 'showTransaction']);
Route::get('/readingList', [ReadingListController::class, 'showBookmark']);

// bawah ini jangan dihapus yaa
require __DIR__ . '/auth.php';
