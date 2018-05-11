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
    public function parentId(){
        return $this->belongsTo('App\NewsCategory','parent_id','id');
    }

    
}