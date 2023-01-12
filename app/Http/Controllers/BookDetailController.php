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

    public function create()
    {
        return view('admin-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'isbn' => 'required',
            'length' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'description' => 'required',
            'book_cover' => 'required',
        ]);

        DB::transaction(function () use ($validatedData) {
            $book = Book::create([
                'title' => $validatedData['title'],
                'author' => $validatedData['author']
            ]);
            $file = $validatedData['book_cover'];
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            Storage::putFileAs('book_images', $file, $fileName);

            BookDetail::create([
                'book_id' => $book->id,
                'description' => $validatedData['description'],
                'isbn' => $validatedData['isbn'],
                'length' => $validatedData['length'],
                'publisher' => $validatedData['publisher'],
                'stock' => $validatedData['stock'],
                'price' => $validatedData['price'],
                'images' => $fileName
            ]);
        });

        return redirect(route('home'));
    }

    public function edit($id)
    {
        return view('admin.detail.update', [
            'book' => Book::findOrFail($id),
        ]);
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
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'isbn' => 'required',
            'length' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Book::where('id', $id)->update([
            'title' => $request->title,
            'author' => $request->author,
        ]);

        if ($request->hasFile('book_cover')) {
            $book = BookDetail::where('book_id', $id)->first();
            Storage::delete('book_images' . $book->image);

            $file = $request->file('book_cover');
            $fileName = time().'.' . $file->getClientOriginalName();
            Storage::putFileAs('book_images', $file, $fileName);

            BookDetail::where('book_id', $id)->update([
                'images' => $fileName
            ]);
        }

        BookDetail::where('book_id', $id)->update([
            'book_id' => $id,
            'description' => $request->description,
            'isbn'=> $request->isbn,
            'length' => $request->length,
            'publisher' => $request->publisher,
            'stock' => $request->stock,
            'price' => $request->price
        ]);

        return redirect(route('show book', ['id' => $id]));
    }
}
