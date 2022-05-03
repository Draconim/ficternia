<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Book;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function getOwnBookChapters($id){
        $chapters = Auth::User()->bookChapters()->where('book_id','=',$id)->get();
        $book = Auth::User()->books()->where('id','=',$id)->get();
        return view('publishing.chapters.viewChapters')->with(compact('chapters','book'));
    }
    public function getChapter($bookId,$chapterId)
    {
        $chapters = Auth::User()->bookChapters()->where('book_id','=',$bookId)->get();
        $chapter = $chapters->where('id','=',$chapterId)->first();
        return view('publishing.chapters.addUpdateChapter')->with(compact('bookId','chapter'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newChapter($bookId)
    {
       return view('publishing.chapters.addUpdateChapter')->with('bookId',$bookId);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addChapter(Request $request, $id)
    {
        if($request->has('publish')){
            Auth::user()->bookChapters()->create($request->except('_token')+['book_id'=>$id]+['created_at'=>Carbon::now()->format('Y-m-d H:i:s')]+['published_at'=>Carbon::now()->format('Y-m-d H:i:s')]+['published'=>'published']);
        }else{
            Auth::user()->bookChapters()->create($request->except('_token')+['book_id'=>$id]+['created_at'=>Carbon::now()->format('Y-m-d H:i:s')]+['published_at'=>null]);
        }
        return redirect()->route('getChapters',$id);
    }
    public function publishChapter($bookId,$chapterId){
        $chapter = Auth::user()->bookChapters()->find($chapterId);
        $chapter->published='published';
        $chapter->published_at=Carbon::now()->format('Y-m-d H:i:s');
        $chapter->save();
        return redirect()->route('getChapters',$bookId);
    }
    public function unPublishChapter($bookId,$chapterId){
        $chapter = Auth::user()->bookChapters()->find($chapterId);
        $chapter->published='draft';
        $chapter->published_at=null;
        $chapter->save();
        return redirect()->route('getChapters',$bookId);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chapter $chapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function deleteChapter($bookId,$chapterId)
    {
        Chapter::destroy($chapterId);
        return redirect()->route('getChapters',$bookId);
    }
}
