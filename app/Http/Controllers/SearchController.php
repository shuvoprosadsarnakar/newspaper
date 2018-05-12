<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Division;
use App\District;
use App\Upozila;
use App\Tag;
use App\NewsCategory;
use JanDrda\LaravelGoogleCustomSearchEngine\LaravelGoogleCustomSearchEngine;

class SearchController extends Controller
{
    //
    public function index(){
    	// $id=News::where('id','15')->value('user_id');
    	// echo "$id";
    	return view('searchFilter');
    }


    public function prodfunct(){

        $division=Division::all();//get data from table
        return view('searchFilter',compact('division'));//sent data to view

    }

    public function distric(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data 

        //$request->id here is the id of our chosen option id
        $data=District::select('name','id')->where('divison_id',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
    }


    public function findUpozila(Request $request){

        //it will get price if its id match with product id
        $p=Upozila::select('name','id')->where('district_id',$request->id)->take(100)->get();

        return response()->json($p);
    }

    public function getdata(Request $request){
    	$getUpozilaId=$request->input('upozila');
    	$news=News::where('upozila_id',$getUpozilaId)->simplePaginate(10);
    	//dd($news);
    	return view('upozilaNews',compact('news'));

    }

    public function subDistrict($id){

       $place = Upozila::where('id',$id)
                        ->pluck('name')->first();

        $news = News::where('upozila_id',$id)->simplePaginate(10);
        //dd($news);
        return view('upozilaNewsDub',compact('news','place'));

    }

    public function svgDistrict($id){
        $findUpozilaId=Upozila::select('id')->where('district_id',$id)->pluck('id');
        $allUpozilas=News::whereIn('upozila_id',$findUpozilaId)->simplePaginate(10);;

        $news = News::with('news_categories','tagged')
                        //->where('newscategory_id',$id)
                        ->take(4)
                        ->get();

        //retrive all the tags
        $tags = News::existingTags()->pluck('name');

        $category_name = District::where('id',$id)
                                        ->get()
                                        ->first();

        $subcategories = Upozila::where('district_id',$id)
                                        ->take(7)
                                        ->get();
        
        // $featured_news = News::with('news_categories')
        //                         ->where('newscategory_id',$id)
        //                         ->where('featured',1)
        //                         ->get() 
        //                         ->first();

        // $categorized_news = News::with('news_categories')
        //                         ->where('newscategory_id',$id)
        //                         ->take(8)
        //                         ->get();                        

        //dd($featured_news);
        return view('location', compact('allUpozilas','news','tags','subcategories','category_name','featured_news'));
    }





    
}
