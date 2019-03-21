<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function all_news(){
        return $this->belongsTo('App\allNews');
    }
}
