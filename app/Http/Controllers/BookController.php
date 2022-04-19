<?php

namespace App\Http\Controllers;

use Image;
use Auth;
use App\Models\Book;
use App\Models\Genre;
use App\Models\subGenre;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('title')->get();
        return view('browsing.books')->with('books',$books);
    }

    public function browseGenre($genre){
        $id = Genre::where("name",'=',$genre)->select('id')->get();
        $books = Book::where("genre_id",'=',$id)->get();
        return view('browsing.books')->with('books',$books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::orderBy('name')->get();
        $subGenres = subGenre::orderBy('name')->get();
        //dd(compact('genres','subGenres'));
        return view('publishing.createBook')->with(compact('genres','subGenres'));
    }
    /*public function getSubGenres($id){
        dd('alfa');
       // $subGenres = subGenre::where('genre_id','=',$id)->orderBy('name')->pluck('name','id');
        return json_encode(subGenre::where('genre_id','=',$id)->orderBy('name')->get());
        
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $request->validate([
            'title' => 'required|min:2|max:100',
            'genre_id' => 'required|exists:genres,id',
            'subGenre_id' => 'required|exists:sub_genres,id',
            'cover' => 'file'
        ]);
        */
        //username, title, cover, description, genre, views
        $book = Auth::user()->book()->create($request->except('_token'));
        $image = $this->uploadImage($request);

        if($image){
            $book->cover = $image->basename;
            $book->save();
        }
        return redirect()->route('ownBooks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    public function myBooks(){
        $myBooks = Auth::user()->book()->get();
        return view('publishing.ownBooks')->with('books',$myBooks);
    }
    public function myBook($id){
        $myBook = Auth::user()->book()->where('id','=',$id)->get();
        if ($myBook->username != Auth::user()) {
            return abort(403);
        }
        return view('publishing.ownBooks',$id)->with('book',$myBook);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
    private function uploadImage(Request $request)
    {
        $file = $request->file('cover');
        if (!$file) {
            return;
        }

        $fileName = uniqid();

        $cover = Image::make($file)->save(public_path("images\covers\{$fileName}.{$file->extension()}"));

        return $cover;
    }
}
