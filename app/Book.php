<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BookGenre;
use App\Chapter;

class Book extends Model
{
    public function bookGenres(){
        return $this->hasMany(BookGenre::class);
    }

    public function chapters(){
        return $this->hasMany(Chapter::class);
    }
}
