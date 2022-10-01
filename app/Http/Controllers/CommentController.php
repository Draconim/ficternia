<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Comment;
use App\Http\Controllers\ChapterController;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
 

    
    public function store(Request $request,$book_id, $id)
    {
        $temp =[
            'user_id' => Auth::User()['id'],
            'cp_id' => $id,
            'content' => $request['commentContent']
        ];
       Auth::user()->comments()->create($temp);
       return ChapterController::ChapterReading($book_id,$id);
    }

    public static function show($cp_id)
    {
        $comments = Comment::where('cp_id','=',$cp_id)->get();
        $temp = [];
        foreach($comments as $comment){
            $user = User::where('id','=',$comment->user_id)->get();
            array_push($temp, [
                'username' => $user[0]->username,
                'content' => $comment->content
            ]);
        }
        return $temp;
    }

    public function delete($id)
    {
        Comment::destroy($id);
        $comments = Comment::get();
        return redirect()->route('ownBooks')->with('books',$myBooks);
    }
}
