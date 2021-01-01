<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Chapter;

class ChapterDetail extends Model
{
    public function chapter(){
        return $this->belongsTo(Chapter::class);
    }
}
