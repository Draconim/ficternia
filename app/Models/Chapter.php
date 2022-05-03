<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'content',
        'created_at',
        'published_at',
        'updated_at',
        'published',
        'book_id'
    ];


    public function chapter(){
        return $this->belongsTo(Book::class,'book_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
