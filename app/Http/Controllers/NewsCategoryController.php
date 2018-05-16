<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Tag;
use App\NewsCategory;
use JanDrda\LaravelGoogleCustomSearchEngine\LaravelGoogleCustomSearchEngine;
use Exception;

class NewsCategoryController extends Controller
{
    //returns category page
    public function category($id)
    {
        $news = News::with('news_categories','tagged')
                        //->where('newscategory_id',$id)
                        ->take(4)
                        ->get();

        //retrive all the tags
        //$tags = News::existingTags()->pluck('name');

        $category_name = NewsCategory::where('id',$id)
                                        ->get()
                                        ->first();

        $subcategories = NewsCategory::where('parent_id',$id)
                                        ->take(5)
                                        ->get();
        
        $featured_news = News::with('news_categories')
                                ->where('newscategory_id',$id)
                                ->where('featured',1)
                                ->get() 
                                ->first();

        $categorized_news = News::with('news_categories')
                                ->where('newscategory_id',$id)
                                ->take(8)
                                ->get();                        

        //dd($featured_news);
        return view('category', compact('news','subcategories','category_name','featured_news','categorized_news'));
    }

    //return single news page
    public function news($id)
    {

        // getting the selected single news
        $single_news = News::with('news_categories','tagged')
                        ->where('id',$id)
                        ->get()
                        ->first();
        
        $subcategories = NewsCategory::where('parent_id',$single_news->newscategory_id)
                        ->take(7)
                        ->get();


        // getting the simillar news
        $simillar = News::with('news_categories')
                        ->where('newscategory_id',$single_news->newscategory_id)
                        ->where('id','!=',$id)
                        ->take(8)
                        ->get();

        // getting the latest news
        $latest = News::with('news_categories')
                        ->where('newscategory_id',$single_news->newscategory_id)
                        ->where('id','!=',$id)
                        ->take(8)
                        ->get();

        // getting the popular news
        $popular = News::with('news_categories')
                        ->where('newscategory_id',$single_news->newscategory_id)
                        ->where('id','!=',$id)
                        ->take(8)
                        ->get();
        
        // getting random news 
        $random_news = News::with('news_categories','tagged')
                        ->take(8)
                        ->get();
        
        // get previous News id
        $previous = News::where('id', '<', $id)->get()->first();

        // get next News id
        $next = News::where('id', '>', $id)->get()->first();

        $current_url=url()->current();
        try {
            $url = 'https://graph.facebook.com/?id='.$current_url;
            $content = file_get_contents($url);
            $json = json_decode($content, true);
            $share_count = $json['share']['share_count'];
          }
          catch (Exception $e) {
              $share_count = 0;
          }
        
        
        $created_date = BDdate(strtotime($single_news->created_at));
        $updated_date = BDdate(strtotime($single_news->updated_at));

        $created_time=BanglaConverter::en2bn(date('h:i',strtotime($single_news->created_at)));
        $updated_time=BanglaConverter::en2bn(date('h:i',strtotime($single_news->updated_at)));

        // gettting all the tags
        //$tags = News::existingTags()->pluck('name');

        return view('news', compact('current_url','single_news','subcategories','previous','next','random_news','simillar','popular','latest','created_time','updated_time','created_date','updated_date','share_count'));
    }

    public function photos()
    {
        $news = News::with('news_categories','tagged')
                        ->where('newscategory_id',$id)
                        ->take(4)
                        ->get();

        //dd($request->search);
        return view('photos');
    }

    public function searchresult()
    {
        //dd($request->search);
        return view('search');
    }
}

class BanglaConverter 
{
    public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    
    public static function bn2en($number) {
        return str_replace(self::$bn, self::$en, $number);
    }
    
    public static function en2bn($number) {
        return str_replace(self::$en, self::$bn, $number);
    }
}

class BanglaDate 
{
    private $timestamp;
    private $morning;
    private $engHour;
    private $engDate;
    private $engMonth;
    private $engYear;
    private $bangDate;
    private $bangMonth;
    private $bangYear;
    private $bn_months = array("পৌষ", "মাঘ", "ফাল্গুন", "চৈত্র", "বৈশাখ", "জ্যৈষ্ঠ", "আষাঢ়", "শ্রাবণ", "ভাদ্র", "আশ্বিন", "কার্তিক", "অগ্রহায়ণ");
    private $bn_month_dates = array(30,30,30,30,31,31,31,31,31,30,30,30);
    private $bn_month_middate = array(13,12,14,13,14,14,15,15,15,15,14,14); 
    private $lipyearindex = 3;
    function __construct( $timestamp, $hour = 6 ) {
    $this->BanglaDate( $timestamp, $hour );
    }
    function BanglaDate( $timestamp, $hour = 6 ) {
    $this->engDate = date( 'd', $timestamp );
    $this->engMonth = date( 'm', $timestamp );
    $this->engYear = date( 'Y', $timestamp );
    $this->morning = $hour;
    $this->engHour = date( 'G', $timestamp );
    //calculate the bangla date
    $this->calculate_date();
    //now call calculate_year for setting the bangla year
    $this->calculate_year();
    //convert english numbers to Bangla
    $this->convert();
    }
    function set_time( $timestamp, $hour = 6 ) {
    $this->BanglaDate( $timestamp, $hour );
    }
    private function calculate_date() { 
    $this->bangDate = $this->engDate - $this->bn_month_middate[$this->engMonth - 1];
    if ($this->engHour < $this->morning) 
    $this->bangDate -= 1;
    
    if (($this->engDate <= $this->bn_month_middate[$this->engMonth - 1]) || ($this->engDate == $this->bn_month_middate[$this->engMonth - 1] + 1 && $this->engHour < $this->morning) ) {
    $this->bangDate += $this->bn_month_dates[$this->engMonth - 1];
    if ($this->is_leapyear() && $this->lipyearindex == $this->engMonth) 
    $this->bangDate += 1;
    $this->bangMonth = $this->bn_months[$this->engMonth - 1];
    }
    else{
    $this->bangMonth = $this->bn_months[($this->engMonth)%12]; 
    }
    }
    function is_leapyear() {
    if ( $this->engYear % 400 == 0 || ($this->engYear % 100 != 0 && $this->engYear % 4 == 0) )
    return true;
    else
    return false;
    }
    function calculate_year() {
    $this->bangYear = $this->engYear - 593;
    if (($this->engMonth < 4) || (($this->engMonth == 4) && (($this->engDate < 14) || ($this->engDate == 14 && $this->engHour < $this->morning))))
    $this->bangYear -= 1;
    }
    function bangla_number( $int ) {
    $engNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
    $bangNumber = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
    $converted = str_replace( $engNumber, $bangNumber, $int );
    return $converted;
    }
    function convert() {
    $this->bangDate = $this->bangla_number( $this->bangDate );
    $this->bangYear = $this->bangla_number( $this->bangYear );
    }
    function get_date() {
    return array($this->bangDate, $this->bangMonth, $this->bangYear);
    }
    }
    function BDdate($time)
    {
    $bn = new BanglaDate($time);
    $output = $bn->get_date();
    $ReadyDate = "$output[0] $output[1] $output[2]";
    return $ReadyDate;
    }