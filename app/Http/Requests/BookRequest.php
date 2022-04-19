<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    
    public function rules()
    {
        //username, title, cover, description, genre, views
        return [
            'title' => 'required|min:2|max:100',
            'genre_id' => 'required|exists:genres,id',
            'subGenre_d' => 'required|exists:sub_genres,id',
            'cover' => 'file|image',
        ];
    }
}
