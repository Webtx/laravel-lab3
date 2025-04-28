<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    //basically means that comment belongs to posts class
    public function posts(){
        return $this->belongsTo(Post::class);
    }

}