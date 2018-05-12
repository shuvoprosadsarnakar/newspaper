<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upozila extends Model
{
    
    protected $table = 'upozila';

    //protected $morphClass = 'news';

    public function news(){
        return $this->hasMany('App\News','id','upozila_id');
    }
}

