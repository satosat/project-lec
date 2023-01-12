<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmarks = DB::table('bookmarks')
            ->join('books', 'bookmarks.book_id',    '=', 'books.id')
            ->join('book_details', 'bookmarks.book_id', '=', 'book_details.book_id')
            ->where('user_id', auth::id())
            ->get();
        return view('readingList.index', compact('bookmarks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required'
        ]);

        $row = Bookmark::where([
            ['book_id', '=', $request->book_id],
            ['user_id', '=', Auth::id()]
        ]);

        if (count($row->get())) {
            $row->delete();
        } else {
            $bookmark = Bookmark::create([
                'book_id' => $request->book_id,
                'user_id' => Auth::id(),
            ]);
        }

        return response()->noContent();
    }
}
