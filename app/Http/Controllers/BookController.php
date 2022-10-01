<?php

namespace App\Http\Controllers;

use Image;
use Auth;
use Carbon\Carbon;
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
        $books = Book::where('published','=','published')->orderBy('title')->get();
        return view('browsing.browseBooks')->with('books',$books);
    }


    public function browseGenre($genre){
        $id = Genre::where("name",'=',$genre)->select('id')->get();
        $books = Book::where("genre_id",'=',$id)->where('published','=','published')->get();
        return view('browsing.browseBooks')->with('books',$books);
    }

    public static function checkAge($data){
        if($data->has('age18')){
            return 18;
        }
        if($data->has('age16')){
            return 16;
        }
        if($data->has('age14')){
            return 14;
        }
        if($data->has('age12')){
            return 12;
        }
        return 18;
    }
    public static function checkOrder($data){
        if($data->has('orderBy')){
            if($data->orderBy == "asc"){
                return "asc";
            }
            return "desc";
        }
    }
    public static function checkSort($data){
        if($data->has('sortBy')){
            if($data->sortBy == "createdAt"){
                return "created_at";
            }
            if($data->sortBy == "latestUpdate"){
                return "last_updated";
            }
            if($data->sortBy == "title"){
                return "title";
            }
            return "views";
        }
    }
    public static function checkMode($data){
        if($data->has('searchIn')){
            if($data->searchIn == "title"){
                return "title";
            }
            if($data->searchIn == "description"){
                return "description";
            }
            return "user";
        }
    }
    private static function getBookFromUser($age,$order,$sort,$text){
        $users = User::where('username','LIKE','%'.$text.'%')->get();
        $books;
        foreach($users as $user){
            $temp = Book::where('user_id','=',$user->id)->where('published','=','published')->get();
            if(!isset($books)){
                $books = $temp;
            }
            $final = $books->merge($temp);
        }
        switch($age){
            case 18:
                if($order=='desc'){
                    $sortAge = $final->sortByDesc($sort);
                    return $sortAge;
                }
                $sortAge = $final->sortBy($sort);
                return $sortAge;
                break;
            case 16:
                if($order=='desc'){
                    $sorting = $final->sortByDesc($sort);
                    $sortAge = self::sortAge($sorting,16);
                    return $sortAge;
                }
                $sorting = $final->sortBy($sort);
                $sortAge = self::sortAge($sorting,16);
                return $sortAge;
                break;
            case 14:
                if($order=='desc'){
                    $sorting = $final->sortByDesc($sort);
                    $sortAge = self::sortAge($sorting,14);
                    return $sortAge;
                }
                $sorting = $final->sortBy($sort);
                $sortAge = self::sortAge($sorting,14);
                return $sortAge;
                break;
            case 12:
                if($order=='desc'){
                    $sorting = $final->sortByDesc($sort);
                    $sortAge = self::sortAge($sorting,12);
                    return $sortAge;
                }
                $sorting = $final->sortBy($sort);
                $sortAge = self::sortAge($sorting,12);
                return $sortAge;
                break;
        }
        
    }
    private static function getBookByDescription($age,$order,$sort,$text){
        $books = Book::where('description','LIKE','%'.$text.'%')->where('published','=','published')->get();
        switch($age){
            case 18:
                if($order=='desc'){
                    $sorting = $books->sortByDesc($sort);
                    return $sorting;
                }
                $sorting = $books->sortBy($sort);
                return $sorting;
                break;
            case 16:
                if($order=='desc'){
                    $sorting = $books->sortByDesc($sort);
                    $sortAge = self::sortAge($sorting,16);
                    return $sortAge;
                }
                $sorting = $books->sortBy($sort);
                $sortAge = self::sortAge($sorting,16);
                return $sortAge;
                break;
            case 14:
                if($order=='desc'){
                    $sorting = $books->sortByDesc($sort);
                    $sortAge = self::sortAge($sorting,14);
                    return $sortAge;
                }
                $sorting = $books->sortBy($sort);
                $sortAge = self::sortAge($sorting,14);
                return $sortAge;
                break;
            case 12:
                if($order=='desc'){
                    $sorting = $books->sortByDesc($sort);
                    $sortAge = self::sortAge($sorting,12);
                    return $sortAge;
                }
                $sorting = $books->sortBy($sort);
                $sortAge = self::sortAge($sorting,12);
                return $sortAge;
                break;
        }
    }
    private static function getBookByTitle($age,$order,$sort,$text){
        $books = Book::where('title','LIKE','%'.$text.'%')->where('published','=','published')->get();
        switch($age){
            case 18:
                if($order=='desc'){
                    $sorting = $books->sortByDesc($sort);
                    return $sorting;
                }
                $sorting = $books->sortBy($sort);
                return $sorting;
                break;
            case 16:
                if($order=='desc'){
                    $sorting = $books->sortByDesc($sort);
                    $sortAge = self::sortAge($sorting,16);
                    return $sortAge;
                }
                $sorting = $books->sortBy($sort);
                $sortAge = self::sortAge($sorting,16);
                return $sortAge;
                break;
            case 14:
                if($order=='desc'){
                    $sorting = $books->sortByDesc($sort);
                    $sortAge = self::sortAge($sorting,14);
                    return $sortAge;
                }
                $sorting = $books->sortBy($sort);
                $sortAge = self::sortAge($sorting,14);
                return $sortAge;
                break;
            case 12:
                if($order=='desc'){
                    $sorting = $books->sortByDesc($sort);
                    $sortAge = self::sortAge($sorting,12);
                    return $sortAge;
                }
                $sorting = $books->sortBy($sort);
                $sortAge = self::sortAge($sorting,12);
                return $sortAge;
                break;
        }
    }
    private static function sortAge($data,$age) {
        return $data->where('age_limit','<=',$age);
    }
    public function search(Request $request){
        $age = self::checkAge($request);
        $order = self::checkOrder($request);
        $sort = self::checkSort($request);
        $mode= self::checkMode($request);
        $text = $request->bookSearch;
    
        if($mode=="user"){
            $books = self::getBookFromUser($age,$order,$sort,$text);
        }
        if($mode=="description")
            $books = self::getBookByDescription($age,$order,$sort,$text);
        if($mode=="title")
            $books = self::getBookByTitle($age,$order,$sort,$text);
        
        
        return view('browsing.browseBooks')->with('books',$books);
        
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
        return view('publishing.books.addUpdateBook')->with(compact('genres','subGenres'));
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
        if($request->has('published'))
        {
            $array = $request->all();
            $array['published'] = $array['published']=='on' ? 'published' : 'draft';
            $cbook = Auth::user()->books()->create($array+['created_at'=>Carbon::now()->format('Y-m-d H:i:s')]+['last_updated'=>Carbon::now()->format('Y-m-d H:i:s')]+['published_at'=>Carbon::now()->format('Y-m-d H:i:s')]);
        }
        else{
            $array = $request->all();
            $cbook = Auth::user()->books()->create($array+['created_at'=>Carbon::now()->format('Y-m-d H:i:s')]+['last_updated'=>Carbon::now()->format('Y-m-d H:i:s')]+['published'=>'draft']);
        }
        $image = $this->uploadImage($request);

        if($image){
            $cbook->cover = $image->basename;
            $cbook->save();
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
        $myBooks = Auth::user()->books()->get();
        return view('publishing.books.ownBooks')->with('books',$myBooks);
    }
/*
    public function myBook($id){
        $myBook = Auth::user()->books()->where('id','=',$id)->get();
        if ($myBook[0]->user_id != Auth::user()->id) {
            return abort(403);
        }
        return view('publishing.books.ownBooks',$id)->with('book',$myBook);
    }
    */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function getBook($id)
    {
        $myBook = Auth::user()->books()->where('id','=',$id)->get();
        if ($myBook[0]->user_id != Auth::user()->id) {
            return abort(403);
        }
        $genres = Genre::orderBy('name')->get();
        $subGenres = subGenre::orderBy('name')->get();
        return view('publishing.books.addUpdateBook')->with(compact('id','myBook','genres','subGenres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('published')){
            $array = $request->all();
            $array['published'] = $array['published']=='on' ? 'published' : 'draft';
            unset($array['_token']);
            $book = Book::where('id','=',$id)->update($array+['last_updated'=>Carbon::now()->format('Y-m-d H:i:s')]);
        }else{

            $book = Book::where('id','=',$id)->update($request->except('_token')+['last_updated'=>Carbon::now()->format('Y-m-d H:i:s')]+['published'=>'draft']);
        }
        $image = $this->uploadImage($request);
        if($image){
            $book->cover = $image->basename;
            $book->save();
        }
        $myBooks = Auth::user()->books()->get();
        return redirect()->route('ownBooks')->with('books',$myBooks);
        
    }


    public function publishBook($id){
        $book = Auth::user()->books()->find($id);
        $book->published='published';
        $book->published_at=Carbon::now()->format('Y-m-d H:i:s');
        $book->save();
        $myBooks = Auth::user()->books()->get();
        return redirect()->route('ownBooks')->with('books',$myBooks);
    }
    public function unPublishBook($id){
        $book = Auth::user()->books()->find($id);
        $book->published='draft';
        $book->published_at=null;
        $book->save();
        $myBooks = Auth::user()->books()->get();
        return redirect()->route('ownBooks')->with('books',$myBooks);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function deleteBook($id)
    {
        Book::destroy($id);
        $myBooks = Auth::user()->books()->get();
        return redirect()->route('ownBooks')->with('books',$myBooks);
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
