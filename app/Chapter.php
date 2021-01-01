<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Book;

class Chapter extends Model
{
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
