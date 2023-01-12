<?php

namespace App\Http\Controllers;

use App\Models\BookDetail;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.detail.index');
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
    public function store(Request $request)
    {

        $id = Book::insert([
            'title'=>$request->title,
            'author'=>$request->author
        ]);

        $file = $request->file('images');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/img', $file, $fileName);

        BookDetail::insert([
            'book_id' =>$id,
            'description'=>$request->description,
            'length'=>$request->length,
            'publisher'=>$request->publisher,
            'stock'=>$request->stock,
            'price'=>$request->price,
            'images'=>$fileName
        ]);

        return redirect(route('show book'));
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
        $id_book = Book::where('id', $request->id)->update([
            'title' => $request->title,
            'author' => $request->author,
        ]);

        if($request->hasFile('images')){
            $p = BookDetail::where('book_id', $id)->first();
            Storage::delete('public/img'.$p->image);

            $file = $request->file('images');
            $fileName = '.'.$file->getClientOriginalName();
            Storage::putFileAs('public/img', $file, $fileName);

            BookDetail::where('book_id', $request->id)->update([
                'images' => $fileName
            ]);
        }

        BookDetail::where('book_id', $request->id)->update([
            'book_id'=> $id_book,
            'description'=>$request->description,
            'length'=>$request->length,
            'publisher'=>$request->publisher,
            'stock'=>$request->stock,
            'price'=>$request->price
        ]);

        return redirect(route('show book'));
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
