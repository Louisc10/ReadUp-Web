<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BookGenre;

class Genre extends Model
{
    public function bookGenres(){
        return $this->hasMany(BookGenre::class);
    }
}
