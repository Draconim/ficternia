<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'genre_id',
        'subGenre_id',
        'description'
    ];

    public function genre(){
        return $this->belongsTo(Genre::class,'genre_id');
    }
    public function subGenre(){
        return $this->belongsTo(subGenre::class,'subGenre_id');
    }
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function chapters(){
        return $this->hasMany(Chapter::class);
    }
    public function getHasCoverAttribute()
    {
        return $this->cover != null;
    }

    public function getCoverImageAttribute()
    {
        if ($this->has_cover) {
            return asset("uploads/posts/{$this->cover}");
        }
        return "https://via.placeholder.com/350";
    }
}
