<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allNews extends Model
{
    protected $fillable = [
        'title', 'image_uploaded', 'category_name','content'
    ];


    public function images(){
        return $this->hasMany('App\Image');
    }
}
