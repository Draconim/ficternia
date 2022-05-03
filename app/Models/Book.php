<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Chapter;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'cover',
        'genre_id',
        'subGenre_id',
        'age_limit',
        'description',
        'published',
        'created_at',
        'last_updated'
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
    public function comments(){
        dd("comments");
    }
    public function Chapters(){
        dd("beta");
        return $this->hasMany(Chapter::class,'book_id');
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
