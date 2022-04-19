<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function chapter(){
        return $this->belongsTo(Book::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
