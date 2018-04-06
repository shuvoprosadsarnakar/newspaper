<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'news_categories';

    public function news(){
        return $this->hasMany('App\News','id','newscategory_id');
    }
}