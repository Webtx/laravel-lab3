<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    //basically means that comment has many posts

    public function comments() // method should be plural
    {
        return $this->hasMany(Comment::class);
    }

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
}