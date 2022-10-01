<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'cp_id',
        'content'
    ];
    public function comment(){
        return $this->belongsTo(Chapter::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
