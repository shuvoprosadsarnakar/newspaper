<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Tag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('news_categories','users')
                       ->take(10)
                       ->get();
        $tags = Tag::all();
        // return view('welcome', ['news' => $news,'tags'=>$tags]);
        return view('basa',['news' => $news,'tags' => $tags]);

    }
}
