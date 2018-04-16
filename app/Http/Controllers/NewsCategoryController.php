<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Tag;
use App\NewsCategory;

class NewsCategoryController extends Controller
{
    public function category($id)
    {
        $news = News::where('id',$id)
                    ->get()
                    ->first();
        $tags = Tag::all();
        //return view('welcome', ['news' => $news,'tags'=>$tags]);
        return view('test',['news' => $news,'tags' => $tags]);

    }
}
