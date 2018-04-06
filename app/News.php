<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function news_categories(){
        return $this->belongsTo('App\NewsCategory','newscategory_id','id');
    }

    public function users(){
        return $this->belongsTo('App\User','user_id','id');
    }

}
