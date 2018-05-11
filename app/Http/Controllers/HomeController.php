<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

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
                            //->whereDate('date','<=',$ldate)
        $ldate = date('Y-m-d');
        $news = News::with('news_categories','tagged')
                    ->take(6)
                    ->get();

        $popularnews = News::with('news_categories','tagged')
                            ->take(8)
                            ->get();

        // getting the simillar news
        $simillar = News::with('news_categories')
                        ->take(8)
                        ->get();

        // getting the latest news
        $latest = News::with('news_categories')
                        ->take(8)
                        ->get();
        
        // getting random news 
        $random_news = News::with('news_categories','tagged')
                        ->take(6)
                        ->get();

        $tags = News::existingTags()->pluck('name');
 
        //dd($news);
        return view('landing', compact('news','tags','popularnews','random_news'));

    }
}
