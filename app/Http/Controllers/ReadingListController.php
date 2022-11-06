<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReadingListController extends Controller
{
    public function showBookmark(){
        $bookmarks = DB::table('bookmarks')->join('books', 'bookmarks.book_id',	'=', 'books.id')->join('book_details', 'bookmarks.book_id', '=', 'book_details.book_id')->get();
        return view('readingList', compact('bookmarks'));
    }
}
