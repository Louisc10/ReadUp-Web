<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\Book;
Use App\ChapterDetail;

class Chapter extends Model
{
    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function chapterDetails(){
        return $this->hasMany(ChapterDetail::class);
    }
}
