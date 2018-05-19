@extends('layouts.master')

@section('headerlib')

@endsection

@section('content')

@if($single_news)
<div class="innerpage-header ">
    <div class="first-category sub-category">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-12">

            <a href="{{route('category',['id'=>$single_news->news_categories->category_name])}}">
              <div class="category-name">
                <h3>{{$single_news->news_categories->category_name}}</h3>
              </div>
            </a>

          </div>
        </div>
      </div>
    </div>

    <div class="sub-category ">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-12">
            <div class="category-submenu">
              <span class="menu-dropdown">
                <i class="fas fa-angle-down"></i>
              </span>
              <div class="menu-warp" style="display:none;">
                <div id="secondary-menu" class="secondary-menu">
                  <ul class="">
                      @if(!$subcategories->isEmpty() and $subcategories->count()>0) 
                      @foreach($subcategories as $category)
        
                      <li>
                        <a href="{{route('category',['id'=>$category->category_name])}}" class="text-color">{{$category->category_name}}</a>
                      </li>
        
                      @endforeach 
                      @endif
                  </ul>
                </div>
              </div>

            </div>

            <!-- end for mobile sub category-->
            <div class="topic">

              <ul class="menu">
                  @if(!$subcategories->isEmpty() and $subcategories->count()>0) 
                  @foreach($subcategories as $category)
    
                  <li>
                    <a href="{{route('category',['id'=>$category->category_name])}}" class="text-color">{{$category->category_name}}</a>
                  </li>
    
                  @endforeach 
                  @endif
              </ul>
            </div>
          </div>
          <div class="col-md-4">
              @include('layouts.searchinput')
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="category-name gap-rowbottom">
    <div class="container">
      <div class="row sublist-category">
        <div class="col-md-12 col-12">
          <ul>
            <li>
              <a href="{{route('home')}}" class="i-color">
                <i class="fas fa-home"></i>
              </a>
            </li>
            <li>
              <span>
                <i class="fas fa-angle-right"></i>
              </span>
              <a href="{{route('category',['id'=>$single_news->news_categories->category_name])}}" class="text-muted">
                <strong>
                  {{$single_news->news_categories->category_name}}
                </strong>
              </a>
            </li>
          </ul>
        </div>

      </div>

    </div>


  </div>
  <!-- start  main news-->
  <div class="">
    <div class="container">
      <div class="row">
        <!--main 8-->
        <div class="col-md-8 col-12">
          <div class="row">
            <div class="col-md-3 col-12">
              @if(!$single_news->tags->isEmpty())
              <div class=" news-div  auto ">
                <div class="news-tags">
                  <h4 style="font-size:1em">বিষয়: </h4>
                  <div class="timing-details"></div>
                  <ul>
                    @foreach($single_news->tags as $tag)
                    <li>
                      <a href="">{{$tag->name}}</a>
                    </li>
                    @endforeach 
                  </ul>
                </div>
              </div>
              @endif
            </div>
            <div class="col-md-9 col-12">
              <!---->
              <div class="singlecategory-portion singlenews-maximg">
                <div class="singlecategory-portion padding-top15">
                  <h2 class="news-link-font">
                      {{str_limit($single_news->title, 60, '..')}}
                  </h2>
                  <div class="timing-details"></div>
                  <div class="media">
                    {{-- <div class=" single-news">
                      <img alt="জাগো নিউজ ডেস্ক" src="{{URL::asset('storage/'.$s_news->image)}}" class="media-object">
                    </div> --}}
                    <div class="media-body">
                      <span class="small-font text-muted time-font">
                        <i class="fas fa-pencil-alt"></i>
                        <a href="" style="display:inline-block;" rel="nofollow">{{$single_news->author}}</a>
                        <br>
                        <i class="far fa-clock i-color"></i> Published at: {{ date('d, F Y', strtotime($single_news->created_at)) }}&nbsp;{{ date('h:i A', strtotime($single_news->created_at)) }} |
                        <i class="far  fa-clock i-color"></i> Updated at: {{ date('d, F Y', strtotime($single_news->updated_at)) }}&nbsp;{{ date('h:i A', strtotime($single_news->updated_at)) }}
                      </span>
                    </div>
                  </div>
                </div>
                <div class=" ">
                  <!---->
                  <div class="social-share">
                      <div class="share-count float-left">
                        <span class="share-number">{{$share_count}}</span>
                        <span>SHARES</span>
                      </div>
                      <ul class="social-icon social-media ">
                        <li>
                          <a class="share-button" id="fbook-button" href="https://www.facebook.com/sharer/sharer.php?u={{$current_url}}&amp;title={{$single_news->title}}" target="_blank">
                            <i class="fab fa-facebook-f  "></i>
                          </a>
  
                        </li>
                        <li>
                          <a class="share-button" id="tweet-button" href="http://twitter.com/share?text={{$single_news->title}}&url={{$current_url}}" target="_blank">
                            <i class="fab fa-twitter"></i>
                          </a>
  
                        </li>
                        <li>
                          <a class="share-button" id="gplus-button" href="https://plus.google.com/share?url={{$current_url}}" target="_blank">
                            <i class="fab fa-google-plus-g"></i>
                          </a>
  
  
                        </li>
                        <li>
                          <button type="button" onclick="myFunction()">
                            <i class="fas fa-print"></i>
                          </button>
                        </li>
  
                      </ul>
                    </div>
                  <!---->
                </div>
                <div class="category-name ">
                  <img alt="" src="{{URL::asset('storage/'.$single_news->image)}}">
{{-- 
                  <div class="random-caption">প্রতীকী ছবি</div> --}}
                </div>
                <div class="singlenews-details">
                    {!! html_entity_decode($single_news->description) !!}
                </div>
                <!--ad-->
                <div class="row text-center gap-margintopbottom ">

                  <div class="col-md-6 col-6">
                    <!-- /21655469720/tbtNews_Desktop_Details_News_Below_A -->
                    <div id="div-gpt-ad-1509258458742-8" style="height:250px ;margin:auto;">
                      <script>
                        googletag.cmd.push(function () {
                          googletag.display('div-gpt-ad-1509258458742-8');
                        });
                      </script>
                    </div>
                  </div>
                  <div class="col-md-6 col-6">
                    <!-- /21655469720/tbtNews_Desktop_Details_News_Below_B -->
                    <div id="div-gpt-ad-1509258458742-9" style="height:250px;margin:auto;">
                      <script>
                        googletag.cmd.push(function () {
                          googletag.display('div-gpt-ad-1509258458742-9');
                        });
                      </script>
                    </div>
                  </div>
                </div>
                <!--end ad-->
                <hr>
                 <!-- related news-->
            <div class="padding-top15">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 col-12">
                        <h2 class="title">
                            <a href="">
                                More news  
                            </a>
                            <span class="double-border"></span>
                          </h2>
                    </div>
                  </div>
                  <div class="row">
                      @if(!$random_news->isEmpty())
                      @foreach($random_news as $s_news)
                    <div class="col-md-6 col-12">
                        <div class="news-div subnews-div secondnews-div">
                            <div class="img-position">
                              <a href="{{route('news',['id'=>$s_news->id])}}">
                                <img src="{{URL::asset('storage/'.$s_news->image)}}" alt="">
                              </a>
                            </div>
                            <div class="news-link">
                              <h4>
                                <a href="{{route('news',['id'=>$s_news->id])}}">{{str_limit($s_news->title, 40, '..')}}</a>
                              </h4>
                            </div>
                            <div class="category-tag">
                              <span class="float-left ">
                                  @if(!$s_news->tags->isEmpty() and $s_news->tags->count()>0)
                                  <i class="fa fa-tags"></i>
                                  <a href="" class="tags">
                                    {{$s_news->tags[0]->name}} 
                                  </a>
                                  @endif
                              </span>
                              <a href="{{route('category',['id'=>$s_news->news_categories->id])}}" class="float-right tags">
                                {{$s_news->news_categories->category_name}}
                              </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                  </div>
                  <!--another row-->
                  
                </div>
              </div>
              <!--end related news-->
              </div>

              <!---->
            </div>
           
          </div>
        </div>
        <!--end main 8-->
        <div class="col-md-4 col-12">
          <div class="row">
            <div class="col-md-12 col-12">
              <div class="multitab-section tab">
                <!-- Nav tabs -->
                <div class="tab-menu">
                  <ul class=" nav-justified">
                    <li class="active multitab-tab only-tab">
                    <a href="#content21"> More news of {{$single_news->news_categories->category_name}}</a>
                    </li>

                  </ul>
                </div>
                <div class="clear"></div>

                <!-- Tab panes -->
                <div class="tab-content" id="content21">
                  <div class=" multitab-widget-content div-shadow">
                    <ul class="media-list">
                      @if(!$simillar->isEmpty())
                      @foreach($simillar as $simnews)
                      <li class="media">
                        <div class="media-left">
                          <a href="{{route('news',['id'=>$simnews->id])}}">
                            <img src="{{URL::asset('storage/'.$simnews->image)}}" alt="{{str_limit($simnews->title, 60, '..')}} ">
                          </a>
                        </div>
                        <div class="news-body">
                          <h4 class="tabnews-heading">
                            <a href="{{route('news',['id'=>$simnews->id])}}">
                                {{str_limit($simnews->title, 60, '..')}}  
                            </a>
                          </h4>
                        </div>
                      </li>
                      @endforeach 
                      @endif
                    </ul>
                    <!--all news-->
                    <div class="allnews">
                      <a href="{{route('category',['id'=>$single_news->news_categories->id])}}"> 
                       All news of {{$single_news->news_categories->category_name}} 
                      </a>
                    </div>
                    <!--end all news-->
                  </div>
                </div>


              </div>

            </div>
            </div>
            <!--ad-->
            <div class="text-center advertisement">
              <div class="row">
                <div class="col-md-12 col-12 gap-rowbottom">
                  <!-- /21655469720/tbtNews_Desktop_Details_RB_E /height:135px; width:336px;-->
                  <div id="div-gpt-ad-1509258458742-13" style="margin:auto;">
                    <script>
                      googletag.cmd.push(function () {
                        googletag.display('div-gpt-ad-1509258458742-13');
                      });
                    </script>
                  </div>
                </div>
                <div class="col-md-12 col-12 gap-rowbottom">
                  <!-- /21655469720/tbtNews_Desktop_Details_RB_F /height:135px; width:336px;-->
                  <div id="div-gpt-ad-1509258458742-14" style="margin:auto;">
                    <script>
                      googletag.cmd.push(function () {
                        googletag.display('div-gpt-ad-1509258458742-14');
                      });
                    </script>
                  </div>
                </div>
              </div>
            </div>
            <!--end add-->
            <div class="row">
              <div class="col-md-12 col-12">
                  <div class="multitab-section tab">
                      <!-- Nav tabs -->
                      <div class="tab-menu">
                        <ul class=" nav-justified">
                          <li class="active multitab-tab">
                            <a href="#content7">Latest</a>
                          </li>
                          <li class="multitab-tab one">
                            <a href="#content8">Popular</a>
                          </li>
                        </ul>
                      </div>
                      <div class="clear"></div>
      
                      <!-- Tab panes -->
                      <div class="tab-content" id="content7">
                        <div class=" multitab-widget-content">
      
                          <ul class="media-list">
                              @if(!$random_news->isEmpty())
                              @foreach($random_news as $popnews)
                            <li class="media">
                              <div class="media-left">
                                <a href="{{route('news',['id'=>$popnews->id])}}">
                                  <img src="{{URL::asset('storage/'.$popnews->image)}}" alt="{{str_limit($popnews->title, 60, '..')}} ">
                                </a>
                              </div>
                              <div class="news-body">
                                <h4 class="tabnews-heading">
                                  <a href="{{route('news',['id'=>$popnews->id])}}">
                                      {{str_limit($popnews->title, 60, '..')}} 
                                  </a>
                                </h4>
                              </div>
                            </li>
                            @endforeach 
                            @endif
                          </ul>
                          <!--all news-->
                          <div class="allnews">
                            <a href="" rel="">Today's All News</a>
                          </div>
                          <!--end all news-->
                        </div>
                      </div>
                      <div class="tab-content" id="content8">
                        <div class=" multitab-widget-content">
                          <ul class="media-list">
                            @if(!$random_news->isEmpty())
                            @foreach($random_news as $latnews)
                            <li class="media">
                              <div class="media-left">
                                <a href="{{route('news',['id'=>$latnews->id])}}">
                                  <img src="{{URL::asset('storage/'.$latnews->image)}}" alt="{{str_limit($latnews->title, 60, '..')}} ">
                                </a>
                              </div>
                              <div class="news-body">
                                <h4 class="tabnews-heading">
                                  <a href="{{route('news',['id'=>$latnews->id])}}">
                                      {{str_limit($latnews->title, 60, '..')}} 
                                  </a>
                                </h4>
                              </div>
                            </li>
                            @endforeach 
                            @endif
                          </ul>
                          <!--all news-->
                          <div class="allnews">
                            <a href="" rel="">আজকের সর্বশেষ সবখবর</a>
                          </div>
                          <!--end all news-->
                        </div>
                      </div>
      
                    </div>
      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end mian news-->
 <!-- prev news -->
 <div class="desktop-prevnext">
   @if($previous)
  <div class="newsslide prev-news">
      <a href="{{route('news',['id'=>$previous->id])}}">
        <i class="fa fa-arrow-left "></i>
    
        <div id="post_info">
          <div class="post_thumbnail"><img alt="" src="{{URL::asset('storage/'.$previous->image)}}"></div>
        <div class="post_headline">{{$previous->title}}</div>
        </div>
      </a>
    </div>
    @endif
      <!-- end prev st postnews-->
      @if($next)
     <div class="newsslide post-news">
          <a href="{{route('news',['id'=>$next->id])}}">
            <i class="fa fa-arrow-right"></i>
            <div id="post_info">
              <div class="post_thumbnail"><img alt="" src="{{URL::asset('storage/'.$next->image)}}"></div>
              <div class="post_headline">{{$next->title}}</div>
            </div>
          </a>
        </div>
        @endif
      <!-- end post news-->
      
  </div>
  @else
  <div class="row justify-content-center">
  <h1>not found</h1>
  </div>
@endif
@endsection