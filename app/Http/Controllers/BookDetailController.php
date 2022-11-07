<?php

namespace App\Http\Controllers;

use App\Models\BookDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book_details = DB::table('book_details');
        $book_details = $book_details->join('book', 'book.id', '=', 'book_details.id')->get();

        return view('admin-add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addBook(Request $request)
    {
        DB::table('book_details')->insert([
            'book_id'=>$request->book_id,
            'title'=>$request->title,
            //'author'=>$request->author,
            'publisher'=>$request->publisher,
            'length'=>$request->length,
            'stock'=>$request->stock,
            'price'=>$request->price,
            'description'=>$request->description
        ]);

        return redirect()->back();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('book_details')->where('book_id', $request->book_id)->update([
            'title'=>$request->title,
            'author'=>$request->author,
            'publisher'=>$request->publisher,
            'length'=>$request->length,
            'stock'=>$request->stock,
            'price'=>$request->price,
            'description'=>$request->description
        ]);

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
