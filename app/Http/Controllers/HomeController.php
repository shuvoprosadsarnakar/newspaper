<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;

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
        $f_news = News::with('news_categories','tagged')
                    ->orderBy('date', 'desc')
                    ->where('featured',1)
                    ->take(6)
                    ->get();
        //dd($f_news);
        $news =$f_news;
        
        $bangladesh_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name', 'Bangladesh');
                            })
                            ->orderBy('date', 'desc')
                            ->take(7)
                            ->get();
        $sports_cat = NewsCategory::where('parent_id',46)->pluck('id');
        $sports_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name', 'Sports');
                            })->orwhereIn('newscategory_id',$sports_cat)
                            ->take(8)
                            ->get();
        //dd($sports_news);
        $popularnews = News::with('news_categories','tagged')
                    ->take(6)
                    ->get();
            
        // getting the latest news
        $latestnews = News::with('news_categories','tagged')
                        ->take(6)
                        ->get();

        // getting the simillar news
        $motamotnews = News::with('news_categories','tagged')
                        ->take(4)
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
        return view('landing', compact('news','f_news','tags','popularnews','latestnews','random_news','motamotnews','binodon_news','uchosikha_news','bangladesh_news','sports_news'));

    }
}
