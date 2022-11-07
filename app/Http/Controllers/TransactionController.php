<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = DB::table('transactions')->get();
        return view('history.index', compact('transactions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->book_id);
        $request->validate([
            'book_id' => ['required', 'numeric', 'min:0'],
        ]);


        // Check if book exist
        $book = Book::findOrFail($request->book_id);

        if ($book->detail->stock === 0) {
            abort(404);
        }

        Transaction::create([
            'user_id' => Auth::id(),
            'book_id' => $request->book_id,
            'price' => $book->detail->price,
        ]);

        return redirect(route('history'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
