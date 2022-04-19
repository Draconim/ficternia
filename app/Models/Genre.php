<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description'
    ];

    public function genre(){
        return $this->belongsTo(Book::class,'genre_id');
    }
    public function subGenre(){
        return $this->hasMany(subGenre::class);
    }
}
