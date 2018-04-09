<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    public function users(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function news(){
        return $this->belongsTo('App\News','news_id','id');
    }
}
