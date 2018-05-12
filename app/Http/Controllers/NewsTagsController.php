<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Tag;
use App\NewsCategory;

class NewsTagsController extends Controller
{
    public function news($tag)
    {
        $news = News::withAnyTag([$tag])->simplePaginate(10);
        //retrive all the tags
        $tags = News::existingTags()
                    ->take(5)
                    ->pluck('name');
        //dd($tags);
        return view('tags', compact('news','tag'));
    }
}
