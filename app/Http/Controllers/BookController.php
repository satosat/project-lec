<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.index', [
            'books' => Book::orderBy('updated_at', 'DESC')->paginate(8),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $isBookmarked = Bookmark::where([
            ['user_id', Auth::id()],
            ['book_id', $id]
        ])->get();

        $bookmarkedText = "Add to Bookmark";

        if (count($isBookmarked)) {
            $bookmarkedText = "Remove from Bookmark";
        }

        return view('books.show', [
            'book' => Book::findOrFail($id),
            'bookmarked' => $bookmarkedText,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);

        return redirect(route('home'));
    }
}
