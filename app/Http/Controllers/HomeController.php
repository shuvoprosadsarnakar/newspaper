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
                            ->take(6)
                            ->get();

        // getting the simillar news
        $motamotnews = News::with('news_categories','tagged')
                        ->take(4)
                        ->get();

        // getting the latest news
        $latestnews = News::with('news_categories','tagged')
                        ->take(6)
                        ->get();
        
        // getting random news 
        $random_news = News::with('news_categories','tagged')
                        ->take(6)
                        ->get();

        $binodon_news = News::with('news_categories','tagged')
                        ->take(8)
                        ->get();

        $uchosikha_news = News::with('news_categories','tagged')
                        ->orderBy('id', 'DESC')
                        ->take(6)
                        ->get();

        //$tags = News::existingTags()->pluck('name');
 
        //dd($news);
        return view('landing', compact('news','tags','popularnews','latestnews','random_news','motamotnews','binodon_news','uchosikha_news'));

    }
}
