<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;
use Illuminate\Support\Facades\Cache;
use DB;

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

        $popularnews = News::with('news_categories','tagged')
                    ->take(6)
                    ->get();
        // getting the latest news
        $latestnews = News::with('news_categories','tagged')
                ->orderBy('date', 'desc')
                ->take(6)
                ->get();
        
        $bangladesh_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name','like', '%Bangladesh%');
                            })
                            ->orderBy('date', 'desc')
                            ->take(7)
                            ->get();

        $education_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name','like', '%education%');
                            })
                            ->orderBy('date', 'desc')
                            ->take(7)
                            ->get();
        $campus_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name','like', '%campus%');
                            })
                            ->orderBy('date', 'desc')
                            ->take(7)
                            ->get();
        $Health_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name','like', '%health%');
                            })
                            ->orderBy('date', 'desc')
                            ->take(7)
                            ->get();
        $world_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name','like', '%world%');
                            })
                            ->orderBy('date', 'desc')
                            ->take(7)
                            ->get();
        $travel_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name','like', '%travel%');
                            })
                            ->orderBy('date', 'desc')
                            ->take(7)
                            ->get();
        $agriculture_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name','like', '%agritulture%');
                            })
                            ->orderBy('date', 'desc')
                            ->take(7)
                            ->get();
                            
        $jobs_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name','like', '%job%');
                            })
                            ->orderBy('date', 'desc')
                            ->take(7)
                            ->get();

        $sport_id = NewsCategory::where('category_name','like','%sport%')->pluck('id')->first();                
        $sports_cat = NewsCategory::where('parent_id',$sport_id)->pluck('id');
        $sports_news = News::whereHas('news_categories', function($q) {
                            $q->where('category_name', 'like','%sports%');
                            })->orwhereIn('newscategory_id',$sports_cat)
                            ->take(8)
                            ->get();
                    
        // getting the simillar news
        $photo_news = News::whereHas('news_categories', function($q) {
            $q->where('category_name', 'like','%photo%');
            })->orderBy('date', 'desc')
            ->take(8)
            ->get();
        //dd($photo_news);
        $binodon_cat = NewsCategory::where('parent_id',59)->pluck('id');
        $binodon_news = News::whereHas('news_categories', function($q) {
            $q->where('category_name','like','%entertainment%');
            })->orwhereIn('newscategory_id',$sports_cat)
            ->take(8)
            ->get();

 
        //dd($news);
        return view('landing', compact('news','f_news','popularnews','latestnews','education_news','binodon_news',
        'campus_news','bangladesh_news','sports_news','Health_news','world_news','travel_news','agriculture_news',
        'jobs_news','photo_news'));

    }
}
