<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'news_categories';

    public function news(){
        return $this->hasMany('App\News','id','newscategory_id');
    }

    // get the parent category
    public function parent(){
        return $this->belongsTo('App\NewsCategory','parent_id','id');
    }

    // get the child category or sub sub sub category
    public function child(){
        return $this->hasMany('App\NewsCategory','id','parent_id');
    }
    
}