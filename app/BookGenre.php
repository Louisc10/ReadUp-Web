<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;
use App\Genre;

class BookGenre extends Model
{
    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
