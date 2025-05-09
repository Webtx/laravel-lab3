<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    //relationship contains
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}

//php artisan make:model Author -m ...