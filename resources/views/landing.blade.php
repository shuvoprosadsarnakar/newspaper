@extends('layouts.master')
@section('content')



  <!--end header start 1st row-->

  <div class="first-portion">
    <div class="container">
      <div class="row">
        <!-- main col-8-->
        <div class="col-md-8 col-12">
          <div class="row">
            @if(!$news->isEmpty() and $news->count()>1)
            <div class="col-md-8 col-12">
              <!--first img-->
              <div class="news-div main-div dropshadow">
                <div class="img-position">

                  <a href="{{route('news',['id'=>$news[0]->id])}}">
                    <img src="{{URL::asset('storage/'.$news[0]->image)}}" alt="">
                  </a>
                </div>
                <div class="news-link">
                  <h3>
                    <a href="{{route('news',['id'=>$news[0]->id])}}"> 
                        {{$news[0]->title}}  
                    </a>
                  </h3>
                  <p>
                      {{strip_tags($news[0]->description)}}
                  </p>
                </div>
                <div class="category-tag">
                  <span class="float-left ">
                    @if(!$news[0]->tags->isEmpty() and $news[0]->tags->count()>0)
                    <i class="fa fa-tags"></i>
                    <a href="{{route('tags',['tag'=>$news[0]->tags[0]->name])}}" class="tags">
                      {{$news[0]->tags[0]->name}} 
                    </a>
                    @endif
                  </span>
                  <a href="{{route('category',['id'=>$news[0]->news_categories->id])}}" class="float-right tags">
                    {{$news[0]->news_categories->category_name}}
                  </a>
                </div>
              </div>
              <!-- end fisrt img-->
            </div>
            <div class="col-md-4 col-12">
              <!-- 2nd colmnn 1st row-->
              <div class="news-div subnews-div">
                <div class="img-position">
                  <a href="{{route('news',['id'=>$news[1]->id])}}">
                    <img src="{{URL::asset('storage/'.$news[1]->image)}}" alt="">
                  </a>
                </div>
                <div class="news-link">
                  <h4>
                    <a href="{{route('news',['id'=>$news[1]->id])}}">
                        {{str_limit($news[1]->title, 70, '..')}}
                    </a>
                  </h4>
                </div>
                <div class="category-tag">
                  <span class="float-left ">
                      @if(!$news[1]->tags->isEmpty() and $news[1]->tags->count()>0)
                      <i class="fa fa-tags"></i>
                      <a href="{{route('tags',['tag'=>$news[1]->tags[0]->name])}}" class="tags">
                        {{$news[1]->tags[0]->name}} 
                      </a>
                      @endif
                  </span>
                  <a href="{{route('category',['id'=>$news[1]->news_categories->id])}}" class="float-right tags">
                      {{$news[1]->news_categories->category_name}}
                  </a>
                </div>
              </div>
              <!-- end 2nd col 1st row-->
              <div class="news-div subnews-div">
                  <div class="img-position">
                    <a href="{{route('news',['id'=>$news[2]->id])}}">
                      <img src="{{URL::asset('storage/'.$news[2]->image)}}" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="{{route('news',['id'=>$news[2]->id])}}">
                          {{str_limit($news[2]->title, 70, '..')}}
                      </a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                        @if(!$news[2]->tags->isEmpty() and $news[2]->tags->count()>0)
                        <i class="fa fa-tags"></i>
                        <a href="{{route('tags',['tag'=>$news[2]->tags[0]->name])}}" class="tags">
                          {{$news[2]->tags[0]->name}} 
                        </a>
                        @endif
                    </span>
                    <a href="{{route('category',['id'=>$news[2]->news_categories->id])}}" class="float-right tags">
                        {{$news[2]->news_categories->category_name}}
                    </a>
                  </div>
                </div>
            </div>
            @endif
          </div>
          <!-- end first row st 2nd row -->
          <div class="row">
            @if(!$random_news->isEmpty() and $random_news->count()>4)
            @foreach($random_news as $sp_news)
            <div class="col-md-4 col-12">
              <div class="news-div subnews-div">
                <div class="img-position">
                  <a href="{{route('news',['id'=>$sp_news->id])}}">
                    <img src="{{URL::asset('storage/'.$sp_news->image)}}" alt="">
                  </a>
                </div>
                <div class="news-link">
                  <h4>
                    <a href="{{route('news',['id'=>$sp_news->id])}}">
                      {{str_limit($sp_news->title, 60, '..')}}
                    </a>
                  </h4>
                </div>
                <div class="category-tag">
                  <span class="float-left ">
                      @if(!$sp_news->tags->isEmpty() and $sp_news->tags->count()>0)
                    <i class="fa fa-tags"></i>
                    <a href="" class="tags">
                        {{$sp_news->tags[0]->name}} 
                    </a>
                    @endif
                  </span>
                  <a href="{{route('category',['id'=>$sp_news->news_categories->id])}}" class="float-right tags">
                      {{$sp_news->news_categories->category_name}}
                  </a>
                </div>
              </div>
            </div>
            @endforeach
            @endif
          </div>

        </div>
        <!--end main col-8-->
        <div class="col-md-4 col-12">
          <!-- motamot-->
          <div class="row">
            <div class="col-md-12 col-12">
              <div class="motamot">
                <h2>
                  <a href="">মতামত</a>
                </h2>
                <div class="motamot-div">
                    @if(!$motamotnews->isEmpty() and $motamotnews->count()>3)
                    @foreach($motamotnews as $sp_news)
                  <div class="fixing-div media">
                    <a class="float-left div-padding" href="{{route('news',['id'=>$sp_news->id])}}">
                      <img class="media-object" src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" alt="{{str_limit($sp_news->title, 60, '..')}}" style="width:80px;">
                    </a>
                    <div class="fixing-link">
                      <h4 class="news-heading">
                        <a href="{{route('news',['id'=>$sp_news->id])}}"> 
                            {{str_limit($sp_news->title, 60, '..')}}
                        </a>
                      </h4>
                    </div>
                  </div>
                  @endforeach
                  @endif
                </div>
              </div>
            </div>
          </div>
          <!--end motamot-->
          <!-- gap row-->
          <div class="row">
            <div class="col-md-12 col-12 gap-rowtop">
              <div class="text-center">
                <!-- /21655469720/JagoNews_Desktop_Home_Special_Box_RB_B -->
                <div id="div-gpt-ad-1509258458742-25" style="height:135px;">
                  <script>
                    googletag.cmd.push(function () {
                      googletag.display('div-gpt-ad-1509258458742-25');
                    });
                  </script>
                </div>
              </div>
              <!---->
             
            </div>
            <div class="col-md-12 col-12 gap-rowtop">
                <div class="text-center">
                  <!-- /21655469720/JagoNews_Desktop_Home_Special_Box_RB_B -->
                  <div id="div-gpt-ad-1509258458742-25" style="height:135px;">
                    <script>
                      googletag.cmd.push(function () {
                        googletag.display('div-gpt-ad-1509258458742-25');
                      });
                    </script>
                  </div>
                </div>
                <!---->
               
              </div>
          </div>
          <!--end gap row-->
          <!--st jonoprio tab-->
          <div class="row">
            <div class="col-md-12 col-12">
              <div class="multitab-section tab">
                <!-- Nav tabs -->
                <div class="tab-menu">
                  <ul class=" nav-justified">
                    <li class="active multitab-tab">
                      <a href="#content7">সর্বশেষ</a>
                    </li>
                    <li class="multitab-tab one">
                      <a href="#content8">জনপ্রিয়</a>
                    </li>
                  </ul>
                </div>
                <div class="clear"></div>

                <!-- Tab panes -->
                <div class="tab-content" id="content7">
                  <div class=" multitab-widget-content">
                    <ul class="media-list">
                      @if(!$latestnews->isEmpty())
                      @foreach($latestnews as $sp_news)
                      <li class="media">
                        <div class="media-left">
                          <a href="{{route('news',['id'=>$sp_news->id])}}">
                            <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" alt="{{str_limit($sp_news->title, 60, '..')}}">
                          </a>
                        </div>
                        <div class="news-body">
                          <h4 class="tabnews-heading">
                            <a href="{{route('news',['id'=>$sp_news->id])}}">
                                {{str_limit($sp_news->title, 60, '..')}}
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
                <div class="tab-content" id="content8">
                  <div class=" multitab-widget-content">
                    <ul class="media-list">
                      @if(!$popularnews->isEmpty())
                      @foreach($popularnews as $sp_news)
                      <li class="media">
                        <div class="media-left">
                          <a href="{{route('news',['id'=>$sp_news->id])}}">
                            <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" alt="{{str_limit($sp_news->title, 60, '..')}}">
                          </a>
                        </div>
                        <div class="news-body">
                          <h4 class="tabnews-heading">
                            <a href="{{route('news',['id'=>$sp_news->id])}}">
                                {{str_limit($sp_news->title, 60, '..')}}
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
          <!--end jonoprio tab-->
          <!--ad-->
          <div class="text-center row">
            <div class="col-md-12 col-12 gap-rowBottom">
              <!-- /21655469720/JagoNews_Desktop_Home_Special_Box_RB_F -->
              <div id="div-gpt-ad-1509258458742-28" style="height:135px; ">
                <script>
                  googletag.cmd.push(function () {
                    googletag.display('div-gpt-ad-1509258458742-28');
                  });
                </script>
              </div>
            </div>


            <div class="col-md-12 col-12 ">
              <div class="text-center">
                <a href="http://www.shwapno.com/" rel="nofollow" target="_blank">
                  <img src="" title="Shopno" alt="Shopno">
                </a>
              </div>
            </div>
          </div>
          <!--end ad-->
        </div>
      </div>
    </div>
  </div>

  <!--faka-->
  <div class=" singlecategory-portion ">
    <div class="container">
      <div class="row empty-div">
        <div class="col-md-6 col-6">

          <!-- /21655469720/JagoNews_Desktop_Home_Sports_Below_A -->
          <div id="div-gpt-ad-1509258458742-29" style="margin:auto;">
            <script>
              googletag.cmd.push(function () {
                googletag.display('div-gpt-ad-1509258458742-29');
              });
            </script>
          </div>
        </div>
        <div class="col-md-6 col-6 ">

          <!-- /21655469720/JagoNews_Desktop_Home_Sports_Below_B -->
          <div id="div-gpt-ad-1509258458742-30" style="margin:auto;">
            <script>
              googletag.cmd.push(function () {
                googletag.display('div-gpt-ad-1509258458742-30');
              });
            </script>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--end first-portion st bangladesh-->

  <div class="">
    <div class="container">
      <div class="row deshjure-padding">
        <div class="col-md-12 col-12">

          <div class="row">
            <div class="col-md-12 col-12">
              <h2 class="title">
                <a href="">বাংলাদেশ</a>
                <span class="double-border"></span>
              </h2>

            </div>

          </div>
          <div class="row">
              @if(!$news->isEmpty() and $news->count()>1)
              
           <div class="col-md-4 col-12">
            <div class="news-div ">
              <div class="img-position">

                <a href="{{route('news',['id'=>$news[0]->id])}}">
                  <img src="{{URL::asset('storage/'.$news[0]->image)}}" alt="">
                </a>
              </div>
              <div class="news-link secondnews-link">
                <h4>
                  <a href="{{route('news',['id'=>$news[0]->id])}}"> 
                      {{$news[0]->title}}
                  </a>
                </h4>

              </div>
              <div class="category-tag">
                <span class="float-left ">
                    @if(!$news[0]->tags->isEmpty() and $news[0]->tags->count()>0)
                    <i class="fa fa-tags"></i>
                    <a href="{{route('tags',['tag'=>$news[0]->tags[0]->name])}}" class="tags">
                      {{$news[0]->tags[0]->name}} 
                    </a>
                    @endif
                </span>
              
              </div>
            </div>
           </div>
           <div class="col-md-4 col-12">
            <div class="news-div ">
              <div class="img-position">

                <a href="{{route('news',['id'=>$news[1]->id])}}">
                  <img src="{{URL::asset('storage/'.$news[1]->image)}}" alt="">
                </a>
              </div>
              <div class="news-link secondnews-link">
                <h4>
                  <a href="{{route('news',['id'=>$news[1]->id])}}"> 
                      {{$news[1]->title}}
                  </a>
                </h4>

              </div>
              <div class="category-tag">
                <span class="float-left ">
                    @if(!$news[1]->tags->isEmpty() and $news[1]->tags->count()>0)
                    <i class="fa fa-tags"></i>
                    <a href="" class="tags">
                      {{$news[1]->tags[0]->name}} 
                    </a>
                    @endif
                </span>
               
              </div>
            </div>
           </div>
            <!---->
            <div class="col-md-4 col-12 bg-img">
              <!--fix news-->
              @if(!$random_news->isEmpty() and $random_news->count()>4)
              @foreach($random_news as $sp_news)

              <div class="media">
                  <div class="media-left ">
                    <a href="{{route('news',['id'=>$sp_news->id])}}">
                      <img src="{{URL::asset('storage/'.$sp_news->image)}}" alt="">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="{{route('news',['id'=>$sp_news->id])}}">
                          {{str_limit($sp_news->title, 60, '..')}}
                      </a>
                    </h4>
                    <div class="metacategory-tag">
                        @if(!$sp_news->tags->isEmpty() and $sp_news->tags->count()>0)
                        <i class="fa fa-tags"></i>
                        <a href="" class="tags">
                            {{$sp_news->tags[0]->name}} 
                        </a>
                        @endif
                    </div>
                  </div>
                </div>
                @endforeach
                @endif
                <!---->
              <!---->
            </div>
            @endif
          </div>

          <!---->
          <!-- last row-->
          <div class="row ">
              @if(!$motamotnews->isEmpty() and $motamotnews->count()>3)
              @foreach($motamotnews as $sp_news)
            <div class="col-md-3 col-6">
              <div class="news-div subnews-div ">
                <div class="img-position">
                  <a href="{{route('news',['id'=>$sp_news->id])}}">
                    <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" alt="{{str_limit($sp_news->title, 60, '..')}}" alt="">
                  </a>
                </div>
                <div class="news-link">
                  <h4>
                    <a href="{{route('news',['id'=>$sp_news->id])}}">
                        {{str_limit($sp_news->title, 60, '..')}}
                    </a>
                  </h4>
                </div>
                <div class="category-tag">
                  <span class="float-left ">
                    <i class="fa fa-tags"></i>
                    <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                  </span>
                

                </div>
              </div>
            </div>
            @endforeach
                  @endif
          </div>
          <!--end last row-->
        </div>


      </div>
    </div>
  </div>
  <!--end bangladesh st deshjhure-->
  <div class="second-portion">
    <div class="container">
      <div class="deshjure-padding category-padding">
        <div class="row">
          <div class="col-md-8 col-12">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href="">দেশজুড়ে</a>
                  <span class="double-border"></span>
                </h2>

              </div>

            </div>
            <!--first row-->
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="news-div secondnews-div">
                  <div class="img-position">

                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link secondnews-link">
                    <h4>
                      <a href=""> পরমাণু নিরস্ত্রীকরণে সম্মত দুই কোরিয়া</a>
                    </h4>

                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">এইচএসসি</a>
                    </span>
                  
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12 bg-img">
                <div class="media">
                  <div class="media-left ">
                    <a href="">
                      <img src="images/two.jpg" alt="রাজশাহীতে পৃথক অভিযানে গ্রেফতার ৪৫">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="">রাজশাহীতে পৃথক অভিযানে গ্রেফতার ৪৫</a>
                    </h4>
                    <div class="metacategory-tag">
                      <i class="fa fa-tags"></i>
                      <a href="">গ্রেফতার</a>
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left ">
                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাজশাহীতে পৃথক অভিযানে গ্রেফতার ৪৫">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="">রাজশাহীতে পৃথক অভিযানে গ্রেফতার ৪৫</a>
                    </h4>
                    <div class="metacategory-tag">
                      <i class="fa fa-tags"></i>
                      <a href="">গ্রেফতার</a>
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left ">
                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাজশাহীতে পৃথক অভিযানে গ্রেফতার ৪৫">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="">রাজশাহীতে পৃথক অভিযানে গ্রেফতার ৪৫</a>
                    </h4>
                    <div class="metacategory-tag">
                      <i class="fa fa-tags"></i>
                      <a href="">গ্রেফতার</a>
                    </div>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left ">
                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাজশাহীতে পৃথক অভিযানে গ্রেফতার ৪৫">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="">রাজশাহীতে পৃথক অভিযানে গ্রেফতার ৪৫</a>
                    </h4>
                    <div class="metacategory-tag">
                      <i class="fa fa-tags"></i>
                      <a href="">গ্রেফতার</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!--end fist row st 2nd row-->
            <div class="row mincategory">
              <div class="col-md-3 col-6">
                <div class="news-div subnews-div secondnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>

                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-div subnews-div secondnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>

                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-div subnews-div secondnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>

                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-div subnews-div secondnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>

                  </div>
                </div>
              </div>
            </div>

            <!--end snd row-->
          </div>
          <div class="col-md-4 col-12">
            <div class="row">
              <div class="col-md-12 col-12">
                
                      <!-- sukhobor-->
                      <div class="row happy-news">
                        <div class="col-md-12">
                          <div class="allnews cul-padding">
                            <a href="" rel=""> বিস্ময়কর পৃথিবী</a>
                          </div>
                        </div>
          
          
                      </div>
          
                      <!--end sukhobor st horz-->
          
                      <div class="happynews-bg">
                        <div class=" boldfont-size ">
                          <div class="img-position">
                            <a href="">
                              <img src="http://via.placeholder.com/251x130" alt="">
                            </a>
                          </div>
                          <div class="news-link reduce-height">
                            <h4>
                              <a href=""> অশান্ত মিয়ানমার, এবার কারেন </a>
                            </h4>
                          </div>
          
                        </div>
                        <!---->
                        <div class="vertical-category">
                          <div class="media">
                            <div class="media-left">
          
                              <a href="">
                                <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                              </a>
                            </div>
                            <div class="news-body">
                              <h4 class="tabnews-heading">
                                <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                              </h4>
                            </div>
                          </div>
                        </div>
                        <!---->
                        <div class="vertical-category">
                          <div class="media">
                            <div class="media-left">
          
                              <a href="">
                                <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                              </a>
                            </div>
                            <div class="news-body">
                              <h4 class="tabnews-heading">
                                <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                              </h4>
                            </div>
                          </div>
                        </div>
                        <!---->
                        <div class="vertical-category">
                          <div class="media">
                            <div class="media-left">
          
                              <a href="">
                                <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                              </a>
                            </div>
                            <div class="news-body">
                              <h4 class="tabnews-heading">
                                <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                              </h4>
                            </div>
                          </div>
                        </div>
                        <!---->
                        <div class="vertical-category">
                          <div class="media">
                            <div class="media-left">
          
                              <a href="">
                                <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                              </a>
                            </div>
                            <div class="news-body">
                              <h4 class="tabnews-heading">
                                <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                              </h4>
                            </div>
                          </div>
                        </div>
                        <!---->
                        <!---->
                      </div>
          
                      <!--horz-->
                      <div class="row happy-news">
                        <div class="col-md-12">
                          <div class="allnews cul-padding">
                            <a href="" rel=""> আরও পড়ুন</a>
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
  <!--end desh st single-->
  <div class=" " style="margin-bottom: 20px;">
    <div class="container">
      <div class="row  category-padding">
        <!---->
        <div class="col-md-8 col-12 ">
          <div class="row">
            <div class="col-md-4 col-12 ">

              <div class="">
                <h2 class="title  ">
                  <a href=""> সারাবিশ্ব </a>
                  <span class="double-border"></span>
                </h2>
                <!--news-->

                <div class="singlecategory-portion">
                    @if(!$news->isEmpty() and $news->count()>1)
                  <div class=" boldfont-size ">
                    <div class="img-position">
                      <a href=" {{route('news',['id'=>$news[1]->id])}} ">
                        <img src="{{URL::asset('storage/'.$news[1]->image)}}" alt="" >
                      </a>
                    </div>
                    <div class="news-link reduce-height">
                      <h4>
                        <a href="{{route('news',['id'=>$news[1]->id])}}">
                            {{str_limit($news[1]->title, 60, '..')}}
                        </a>
                      </h4>
                    </div>
                  </div>
                  @endif

                  @if(!$motamotnews->isEmpty() and $motamotnews->count()>3)
                  @foreach($motamotnews as $sp_news)
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="{{route('news',['id'=>$sp_news->id])}}">
                          <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" alt="{{str_limit($sp_news->title, 60, '..')}}" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="{{route('news',['id'=>$sp_news->id])}}">
                              {{str_limit($sp_news->title, 60, '..')}}
                          </a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->
                  @endforeach
                  @endif
                </div>

              </div>
              <div class="allnews">
                <a href="" rel=""> সবখবর</a>
              </div>
            </div>
            <div class="col-md-4 col-12 single-news-margin">

              <div class="">
                <h2 class="title  ">
                  <a href=""> শিক্ষা ও সাহিত্য </a>
                  <span class="double-border"></span>
                </h2>
                <!--news-->
                <div class="singlecategory-portion">
                    @if(!$news->isEmpty() and $news->count()>1)
                  <div class=" boldfont-size ">
                    <div class="img-position">
                      <a href=" {{route('news',['id'=>$news[1]->id])}} ">
                        <img src="{{URL::asset('storage/'.$news[1]->image)}}" alt="" >
                      </a>
                    </div>
                    <div class="news-link reduce-height">
                      <h4>
                        <a href="{{route('news',['id'=>$news[1]->id])}}">
                            {{str_limit($news[1]->title, 60, '..')}}
                        </a>
                      </h4>
                    </div>
                  </div>
                  @endif

                  @if(!$motamotnews->isEmpty() and $motamotnews->count()>3)
                  @foreach($motamotnews as $sp_news)
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="{{route('news',['id'=>$sp_news->id])}}">
                          <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" alt="{{str_limit($sp_news->title, 60, '..')}}" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="{{route('news',['id'=>$sp_news->id])}}">
                              {{str_limit($sp_news->title, 60, '..')}}
                          </a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->
                  @endforeach
                  @endif
                </div>

              </div>
              <div class="allnews">
                <a href="" rel=""> সবখবর</a>
              </div>
            </div>
            <div class="col-md-4 col-12 single-news-margin  ">

              <div class="">
                <h2 class="title  ">
                  <a href=""> কৃষি ও জীবন</a>
                  <span class="double-border"></span>
                </h2>
                <!--news-->
                <div class="singlecategory-portion">
                    @if(!$news->isEmpty() and $news->count()>1)
                  <div class=" boldfont-size ">
                    <div class="img-position">
                      <a href=" {{route('news',['id'=>$news[1]->id])}} ">
                        <img src="{{URL::asset('storage/'.$news[1]->image)}}" alt="" >
                      </a>
                    </div>
                    <div class="news-link reduce-height">
                      <h4>
                        <a href="{{route('news',['id'=>$news[1]->id])}}">
                            {{str_limit($news[1]->title, 60, '..')}}
                        </a>
                      </h4>
                    </div>
                  </div>
                  @endif

                  @if(!$motamotnews->isEmpty() and $motamotnews->count()>3)
                  @foreach($motamotnews as $sp_news)
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="{{route('news',['id'=>$sp_news->id])}}">
                          <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" alt="{{str_limit($sp_news->title, 60, '..')}}" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="{{route('news',['id'=>$sp_news->id])}}">
                              {{str_limit($sp_news->title, 60, '..')}}
                          </a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->
                  @endforeach
                  @endif
                </div>

              </div>
              <div class="allnews">
                <a href="" rel=""> সবখবর</a>
              </div>
            </div>
          </div>

        </div>
        <!---->
        <div class="col-md-4 col-12 single-news-margin">
          <!--ad-->
          <div class="text-center">
            <div class="row">
              <div class="col-md-12 col-12 gap-rowbottom">

                <!-- /21655469720/JagoNews_Desktop_Home_Economic_RB_A -->
                <div id="div-gpt-ad-1509258458742-18" style="height:135px;margin:auto;">
                  <script>
                    googletag.cmd.push(function () {
                      googletag.display('div-gpt-ad-1509258458742-18');
                    });
                  </script>
                </div>
              </div>
              <div class="col-md-12 col-12 gap-rowbottom">

                <!-- /21655469720/JagoNews_Desktop_Home_Economic_RB_B -->
                <div id="div-gpt-ad-1509258458742-19" style="height:135px;margin:auto;">
                  <script>
                    googletag.cmd.push(function () {
                      googletag.display('div-gpt-ad-1509258458742-19');
                    });
                  </script>
                </div>
              </div>
            </div>
          </div>
          <!--end ad-->
        </div>
      </div>
    </div>
  </div>
  <!--end single- st binodon-->
  <div class="singlecategory-portion">
    <div class="container">
      <div class="category-padding">
        <div class="row">
          <div class="col-md-12 col-12">
            <h2 class="title">
              <a href=""> বিনোদন </a>
              <span class="double-border"></span>
            </h2>

          </div>
        </div>
        <div class="row">
            @if(!$binodon_news->isEmpty() and $binodon_news->count()>4)
            @foreach($binodon_news as $sp_news)
          <div class="col-md-3 col-6">
            <div class="news-div subnews-div secondnews-div">
              <div class="img-position">
                <a href="{{route('news',['id'=>$sp_news->id])}}">
                  <img src="{{URL::asset('storage/'.$sp_news->image)}}" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="{{route('news',['id'=>$sp_news->id])}}">
                      {{str_limit($sp_news->title, 60, '..')}}
                  </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  <i class="fa fa-tags"></i>
                  <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                </span>
               
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
  <!-- end binodon st it-->
  <div class="" style="margin-bottom: 20px;">
    <div class="container">
      <div class="row  category-padding">
        <!---->
        <div class="col-md-8 col-12 ">
          <div class="row">
            <div class="col-md-4 col-12 ">

              <div class="">
                <h2 class="title  ">
                  <a href=""> উচ্চশিক্ষা </a>
                  <span class="double-border"></span>
                </h2>
                <!--news-->
                <div class="singlecategory-portion">
                    @if(!$news->isEmpty() and $news->count()>1)
                  <div class=" boldfont-size ">
                    <div class="img-position">
                      <a href=" {{route('news',['id'=>$news[2]->id])}} ">
                        <img src="{{URL::asset('storage/'.$news[2]->image)}}" alt="" >
                      </a>
                    </div>
                    <div class="news-link reduce-height">
                      <h4>
                        <a href="{{route('news',['id'=>$news[2]->id])}}">
                            {{str_limit($news[2]->title, 60, '..')}}
                        </a>
                      </h4>
                    </div>
                  </div>
                  @endif

                  @if(!$uchosikha_news->isEmpty() and $uchosikha_news->count()>3)
                  @foreach($uchosikha_news as $sp_news)
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="{{route('news',['id'=>$sp_news->id])}}">
                          <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" alt="{{str_limit($sp_news->title, 60, '..')}}" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="{{route('news',['id'=>$sp_news->id])}}">
                              {{str_limit($sp_news->title, 60, '..')}}
                          </a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->
                  @endforeach
                  @endif
                </div>

              </div>
              <div class="allnews">
                <a href="" rel=""> সবখবর</a>
              </div>
            </div>
            <div class="col-md-4 col-12 single-news-margin">

              <div class="">
                <h2 class="title  ">
                  <a href=""> ক্যাম্পাস নিউজ </a>
                  <span class="double-border"></span>
                </h2>
                <!--news-->

                <div class="singlecategory-portion">
                  <div class=" boldfont-size ">
                    <div class="img-position">
                      <a href="">
                        <img src="http://via.placeholder.com/251x130" alt="">
                      </a>
                    </div>
                    <div class="news-link reduce-height">
                      <h4>
                        <a href=""> অশান্ত মিয়ানমার, এবার কারেন বিদ্রোহী- </a>
                      </h4>
                    </div>

                  </div>
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->

                  <!---->
                  <!---->

                  <!---->
                </div>

              </div>
              <div class="allnews">
                <a href="" rel=""> সবখবর</a>
              </div>
            </div>
            <div class="col-md-4 col-12 single-news-margin">

              <div class="">
                <h2 class="title  ">
                  <a href=""> স্বাস্থ্যকথা</a>
                  <span class="double-border"></span>
                </h2>
                <!--news-->

                <div class="singlecategory-portion">
                  <div class=" boldfont-size ">
                    <div class="img-position">
                      <a href="">
                        <img src="http://via.placeholder.com/251x130" alt="">
                      </a>
                    </div>
                    <div class="news-link reduce-height">
                      <h4>
                        <a href=""> অশান্ত মিয়ানমার, এবার কারেন বিদ্রোহী-সেনাবাহিনীর </a>
                      </h4>
                    </div>

                  </div>
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->
                  <div class="vertical-category">
                    <div class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </div>
                  </div>
                  <!---->

                  <!---->
                  <!---->

                  <!---->
                </div>

              </div>
              <div class="allnews">
                <a href="" rel=""> সবখবর</a>
              </div>
            </div>
          </div>

        </div>
        <!---->
        <div class="col-md-4 col-12 single-news-margin">
          <!--ad-->
          <div class="text-center">
            <div class="row">
              <div class="col-md-12 col-12 gap-rowbottom">

                <!-- /21655469720/JagoNews_Desktop_Home_Economic_RB_A -->
                <div id="div-gpt-ad-1509258458742-18" style="height:135px;margin:auto;">
                  <script>
                    googletag.cmd.push(function () {
                      googletag.display('div-gpt-ad-1509258458742-18');
                    });
                  </script>
                </div>
              </div>
              <div class="col-md-12 col-12 gap-rowbottom">

                <!-- /21655469720/JagoNews_Desktop_Home_Economic_RB_B -->
                <div id="div-gpt-ad-1509258458742-19" style="height:135px; margin:auto;">
                  <script>
                    googletag.cmd.push(function () {
                      googletag.display('div-gpt-ad-1509258458742-19');
                    });
                  </script>
                </div>
              </div>
            </div>
          </div>
          <!--end ad-->
        </div>
      </div>
    </div>
  </div>
  <!--end it- st kheladhula-->
  <div class="singlecategory-portion">
    <div class="container">
      <div class="category-padding">
        <div class="row">
          <div class="col-md-12 col-12">
            <h2 class="title">
              <a href=""> খেলাধুলা</a>
              <span class="double-border"></span>
            </h2>

          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-6">
            <div class="news-div subnews-div secondnews-div">
              <div class="img-position">
                <a href="">
                  <img src="http://via.placeholder.com/251x130" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  <i class="fa fa-tags"></i>
                  <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                </span>
               
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="news-div subnews-div secondnews-div">
              <div class="img-position">
                <a href="">
                  <img src="http://via.placeholder.com/251x130" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  <i class="fa fa-tags"></i>
                  <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                </span>
             
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="news-div subnews-div secondnews-div">
              <div class="img-position">
                <a href="">
                  <img src="http://via.placeholder.com/251x130" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  <i class="fa fa-tags"></i>
                  <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                </span>
               
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="news-div subnews-div secondnews-div">
              <div class="img-position">
                <a href="">
                  <img src="http://via.placeholder.com/251x130" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  <i class="fa fa-tags"></i>
                  <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                </span>
              
              </div>
            </div>
          </div>
        </div>
        <!---->
        <div class="row">
          <div class="col-md-3 col-6">
            <div class="news-div subnews-div secondnews-div">
              <div class="img-position">
                <a href="">
                  <img src="http://via.placeholder.com/251x130" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  <i class="fa fa-tags"></i>
                  <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                </span>
            
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="news-div subnews-div secondnews-div">
              <div class="img-position">
                <a href="">
                  <img src="http://via.placeholder.com/251x130" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  <i class="fa fa-tags"></i>
                  <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                </span>
               
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="news-div subnews-div secondnews-div">
              <div class="img-position">
                <a href="">
                  <img src="http://via.placeholder.com/251x130" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  <i class="fa fa-tags"></i>
                  <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                </span>
              
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="news-div subnews-div secondnews-div">
              <div class="img-position">
                <a href="">
                  <img src="http://via.placeholder.com/251x130" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  <i class="fa fa-tags"></i>
                  <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                </span>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end kheladhula st sakhatkar-->
  <div class="">
    <div class="container">
      <div class="category-padding interview">
        <div class="row">
          <div class="col-md-8 col-12">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href=""> সাক্ষাৎকার</a>
                  <span class="double-border"></span>
                </h2>

              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-12">
                <!---->
                <div class="news-div">
                  <div class="person">
                    <span>
                      <img src="https://cdn.jagonews24.com/media/imgAll/2018January/SM/igp-sohidul-haque-20180114215238.jpg" alt="আইজিপি">
                    </span>
                    <a href="">আইজিপি</a>
                  </div>
                  <div class="news-link">
                    <a href="">
                      <i class="fa fa-quote-left"></i> পুলিশের প্রতি জনগণের আস্থা বাড়ছে। এখন পুলিশে অনেক মেধাবী ও ভালো ছেলেরা আসছে। তারা ভালো কাজ করতে
                      প্রতিশ্রুতিবদ্ধ। তাদের কারণে প্রশাসনে গতি বেড়েছে। আশা করছি তারা পুলিশকে আরও বদলে দেবে।
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <!---->
              </div>
              <div class="col-md-3 col-12">
                <div class="news-div">
                  <div class="person">
                    <span>
                      <img src="https://cdn.jagonews24.com/media/imgAll/2018January/SM/monjurul-islam-20180109143144.jpg" alt="অধ্যাপক সৈয়দ মনজুরুল ইসলাম">
                    </span>
                    <a href="">অধ্যাপক সৈয়দ মনজুরুল ইসলাম</a>
                  </div>
                  <div class="news-link">
                    <a href="">
                      <i class="fa fa-quote-left"></i> রাষ্ট্র ক্রমাগতভাবে শিক্ষা খাতের বৈষম্যধারাকে পুষ্ট করেছে। শিক্ষার বৈষম্যকে প্রতিপালন করছে রাষ্ট্রই।
                      ইংরেজি মাধ্যমের শিক্ষার্থীরা হয়তো ইংরেজি ভালো জানছে। কিন্তু বাংলাসহ অন্যন্য বিষয়ে দুর্বল
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <!---->
                <div class="news-div">
                  <div class="person">
                    <span>
                      <img src="https://cdn.jagonews24.com/media/imgAll/2018January/SM/igp-sohidul-haque-20180114215238.jpg" alt="আইজিপি">
                    </span>
                    <a href="">আইজিপি</a>
                  </div>
                  <div class="news-link">
                    <a href="">
                      <i class="fa fa-quote-left"></i> পুলিশের প্রতি জনগণের আস্থা বাড়ছে। এখন পুলিশে অনেক মেধাবী ও ভালো ছেলেরা আসছে। তারা ভালো কাজ করতে
                      প্রতিশ্রুতিবদ্ধ। তাদের কারণে প্রশাসনে গতি বেড়েছে। আশা করছি তারা পুলিশকে আরও বদলে দেবে।
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <!---->
              </div>
              <div class="col-md-3 col-12">
                <!---->
                <div class="news-div">
                  <div class="person">
                    <span>
                      <img src="https://cdn.jagonews24.com/media/imgAll/2018January/SM/igp-sohidul-haque-20180114215238.jpg" alt="আইজিপি">
                    </span>
                    <a href="">আইজিপি</a>
                  </div>
                  <div class="news-link">
                    <a href="">
                      <i class="fa fa-quote-left"></i> পুলিশের প্রতি জনগণের আস্থা বাড়ছে। এখন পুলিশে অনেক মেধাবী ও ভালো ছেলেরা আসছে। তারা ভালো কাজ করতে
                      প্রতিশ্রুতিবদ্ধ। তাদের কারণে প্রশাসনে গতি বেড়েছে। আশা করছি তারা পুলিশকে আরও বদলে দেবে।
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <!---->
              </div>
            </div>

          </div>
          <div class="col-md-4 col-12">
            <!--ad-->
            <div class="text-center">
              <div class="row">
                <div class="col-md-12 col-12 gap-rowbottom">

                  <!-- /21655469720/JagoNews_Desktop_Home_Interview_RB -->
                  <div id="div-gpt-ad-1509258458742-22" style="height:280px;margin:auto;">
                    <script>
                      googletag.cmd.push(function () {
                        googletag.display('div-gpt-ad-1509258458742-22');
                      });
                    </script>
                  </div>
                </div>
              </div>
            </div>
            <!--end ad-->
          </div>

        </div>
      </div>
    </div>
  </div>

  <!--end sakhhatkar single-->
  <!--faka-->
  <div class="singlecategory-portion">
    <div class="container">
      <div class="row  empty-div">
        <div class="col-md-6 col-6">

          <!-- /21655469720/JagoNews_Desktop_Home_Sports_Below_A -->
          <div id="div-gpt-ad-1509258458742-29" style="margin:auto;">
            <script>
              googletag.cmd.push(function () {
                googletag.display('div-gpt-ad-1509258458742-29');
              });
            </script>
          </div>
        </div>
        <div class="col-md-6 col-6">

          <!-- /21655469720/JagoNews_Desktop_Home_Sports_Below_B -->
          <div id="div-gpt-ad-1509258458742-30" style="margin:auto;">
            <script>
              googletag.cmd.push(function () {
                googletag.display('div-gpt-ad-1509258458742-30');
              });
            </script>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--st single-->
  <div class=" " style="margin-bottom: 20px">
    <div class="container">
      <div class="row  category-padding">
        <!---->


        <div class="col-md-3 col-12 ">

          <div class="">
            <h2 class="title  ">
              <a href=""> ভ্রমণ </a>
              <span class="double-border"></span>
            </h2>
            <!--news-->

            <div class="singlecategory-portion">
              <div class=" boldfont-size ">
                <div class="img-position">
                  <a href="">
                    <img src="http://via.placeholder.com/251x130" alt="">
                  </a>
                </div>
                <div class="news-link reduce-height">
                  <h4>
                    <a href=""> অশান্ত মিয়ানমার, এবার কারেন </a>
                  </h4>
                </div>

              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->

              <!---->
              <!---->

              <!---->
            </div>

          </div>
          <div class="allnews">
            <a href="" rel=""> সবখবর</a>
          </div>
        </div>
        <div class="col-md-3 col-12 single-news-margin">

          <div class="">
            <h2 class="title  ">
              <a href=""> জীবনশৈলী</a>
              <span class="double-border"></span>
            </h2>
            <!--news-->

            <div class="singlecategory-portion">
              <div class=" boldfont-size ">
                <div class="img-position">
                  <a href="">
                    <img src="http://via.placeholder.com/251x130" alt="">
                  </a>
                </div>
                <div class="news-link reduce-height">
                  <h4>
                    <a href=""> অশান্ত মিয়ানমার, এবার কারেন বিদ্রোহী- </a>
                  </h4>
                </div>

              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->

              <!---->
              <!---->

              <!---->
            </div>

          </div>
          <div class="allnews">
            <a href="" rel=""> সবখবর</a>
          </div>
        </div>
        <div class="col-md-3 col-12 single-news-margin">

          <div class="">
            <h2 class="title  ">
              <a href="">চাকরি</a>
              <span class="double-border"></span>
            </h2>
            <!--news-->

            <div class="singlecategory-portion">
              <div class=" boldfont-size ">
                <div class="img-position">
                  <a href="">
                    <img src="http://via.placeholder.com/251x130" alt="">
                  </a>
                </div>
                <div class="news-link reduce-height">
                  <h4>
                    <a href=""> অশান্ত মিয়ানমার, এবার কারেন বিদ্রোহী-সেনাবাহিনীর </a>
                  </h4>
                </div>

              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->

              <!---->
              <!---->

              <!---->
            </div>

          </div>
          <div class="allnews">
            <a href="" rel=""> সবখবর</a>
          </div>
        </div>




        <div class="col-md-3 col-12 single-news-margin ">

          <div class="">
            <h2 class="title  ">
              <a href="">ইংলিশ ভার্সন</a>
              <span class="double-border"></span>
            </h2>
            <!--news-->

            <div class="singlecategory-portion">
              <div class=" boldfont-size ">
                <div class="img-position">
                  <a href="">
                    <img src="http://via.placeholder.com/251x130" alt="">
                  </a>
                </div>
                <div class="news-link reduce-height">
                  <h4>
                    <a href=""> accidents in two districts accidents in two districts </a>
                  </h4>
                </div>

              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">accidents in two districtsaccidents in two districts</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">accidents in two districts</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">accidents in two districts</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">accidents in two districts</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->

              <!---->
              <!---->

              <!---->
            </div>

          </div>
          <div class="allnews">
            <a href="" rel=""> সবখবর</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end single-->


  <div class="singlecategory-portion">
    <div class="category-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-12">

            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href=""> আন্তর্জাতিক</a>
                  <span class="double-border"></span>
                </h2>

              </div>

            </div>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="news-div secondnews-div">
                  <div class="img-position">

                    <a href="">
                      <img src="http://via.placeholder.com/521x271" alt="">
                    </a>
                  </div>
                  <div class="news-link secondnews-link">
                    <h4>
                      <a href=""> পরমাণু নিরস্ত্রীকরণে সম্মত দুই কোরিয়া</a>
                    </h4>

                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">এইচএসসি</a>
                    </span>
                   
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="news-div secondnews-div">
                  <div class="img-position">

                    <a href="">
                      <img src="http://via.placeholder.com/521x271" alt="">
                    </a>
                  </div>
                  <div class="news-link secondnews-link">
                    <h4>
                      <a href=""> পরমাণু নিরস্ত্রীকরণে সম্মত দুই কোরিয়া</a>
                    </h4>

                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">এইচএসসি</a>
                    </span>
                   
                  </div>
                </div>
              </div>
            </div>
            <!---->
            <div class="row  mincategory">
              <div class="col-md-3 col-6">
                <div class="news-div subnews-div secondnews-div ">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>

                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-div subnews-div secondnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>

                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-div subnews-div secondnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>

                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-div subnews-div secondnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>

                  </div>
                </div>
              </div>
            </div>
            <!---->
          </div>

          <div class="col-md-4 col-12 daily-happynews">
            <!-- sukhobor-->
            <div class="row happy-news">
              <div class="col-md-12 col-12 ">
                <div class="allnews cul-padding">
                  <a href="" rel=""> সুখবর প্রতিদিন</a>
                </div>
              </div>


            </div>

            <!--end sukhobor st horz-->

            <div class="happynews-bg">
              <div class=" boldfont-size ">
                <div class="img-position">
                  <a href="">
                    <img src="http://via.placeholder.com/251x130" alt="">
                  </a>
                </div>
                <div class="news-link reduce-height">
                  <h4>
                    <a href=""> অশান্ত মিয়ানমার, এবার কারেন </a>
                  </h4>
                </div>

              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <div class="vertical-category">
                <div class="media">
                  <div class="media-left">

                    <a href="">
                      <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                    </a>
                  </div>
                  <div class="news-body">
                    <h4 class="tabnews-heading">
                      <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                    </h4>
                  </div>
                </div>
              </div>
              <!---->
              <!---->
            </div>

            <!--horz-->
            <div class="row happy-news">
              <div class="col-md-12">
                <div class="allnews cul-padding">
                  <a href="" rel=""> আরও পড়ুন</a>
                </div>
              </div>


            </div>

          </div>
        </div>
      </div>
    </div>
  </div>



  <!--end antojato- st photogalary-->
  <div class="">
    <div class="container">
      <div class="category-padding">
        <div class="row">
          <div class="col-md-12 col-12">
            <h2 class="title">
              <a href="">ফটো গ্যালারি</a>
              <span class="double-border"></span>
            </h2>

          </div>

        </div>
        <div class="row">
          <div class="col-md-8 col-12">
            <div class="row">
              <div class="col-md-12 col-12 photo-div">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                  </ol>

                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <a href="">
                        <img src="http://via.placeholder.com/700x400">
                      </a>
                      <div class="carousel-caption">
                        <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                      </div>
                      <a href="">
                        <i class="fas fa-camera photovedio-icon big-photo"></i>
                      </a>
                    </div>
                    <div class="carousel-item active">
                      <a href="">
                        <img src="http://via.placeholder.com/700x400">
                      </a>
                      <div class="carousel-caption">
                        <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                      </div>
                      <a href="">
                        <i class="fas fa-camera photovedio-icon big-photo"></i>
                      </a>
                    </div>
                    <div class="carousel-item">
                      <a href="">
                        <img src="http://via.placeholder.com/700x400">
                      </a>
                      <div class="carousel-caption">
                        <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি </a>
                      </div>
                      <a href="">
                        <i class="fas fa-camera photovedio-icon big-photo"></i>
                      </a>
                    </div>
                    <div class="carousel-item">
                      <a href="">
                        <img src="http://via.placeholder.com/700x400">
                      </a>
                      <div class="carousel-caption">
                        <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                      </div>
                      <a href="">
                        <i class="fas fa-camera photovedio-icon big-photo"></i>
                      </a>
                    </div>
                  </div>

                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <!--snd row-->
            <div class="row">
              <div class="col-md-4 col-12">
                <div class="news-div subnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির বিশেষ উদ্যোগ</a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>
                    <a href="" class="float-right tags">বিশেষ প্রতিবেদন</a>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="news-div subnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির বিশেষ উদ্যোগ</a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>
                    <a href="" class="float-right tags">বিশেষ প্রতিবেদন</a>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="news-div subnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="images/four.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির বিশেষ উদ্যোগ</a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>
                    <a href="" class="float-right tags">বিশেষ প্রতিবেদন</a>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
            </div>
            <!--end row-->
          </div>
          <div class="col-md-4 col-12">
            <!--photo all jonoprio-->
            <div class="multitab-section tab">
              <!-- Nav tabs -->
              <div class="tab-menu">
                <ul class=" nav-justified">
                  <li class="active multitab-tab">
                    <a href="#content9">সর্বশেষ</a>
                  </li>
                  <li class="multitab-tab one">
                    <a href="#content10">জনপ্রিয়</a>
                  </li>
                </ul>
              </div>
              <div class="clear"></div>

              <!-- Tab panes -->
              <div class="tab-content" id="content9">
                <div class=" photo-galary">

                  <ul class="media-list">
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>

                  </ul>
                  
                </div>
              </div>
              <div class="tab-content" id="content10">
                <div class=" photo-galary">

                  <ul class="media-list">
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগঅপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>


                  </ul>
                 
                </div>
              </div>

            </div>

            <!--end-->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--end photogalary- faka-->
  <div class="singlecategory-portion photo-gap-div">
    <div class="container">
      <div class="row  empty-div">
        <div class="col-md-6 col-6">

          <!-- /21655469720/JagoNews_Desktop_Home_Sports_Below_A -->
          <div id="div-gpt-ad-1509258458742-29" style="margin:auto;">
            <script>
              googletag.cmd.push(function () {
                googletag.display('div-gpt-ad-1509258458742-29');
              });
            </script>
          </div>
        </div>
        <div class="col-md-6 col-6 ">

          <!-- /21655469720/JagoNews_Desktop_Home_Sports_Below_B -->
          <div id="div-gpt-ad-1509258458742-30" style="margin:auto;">
            <script>
              googletag.cmd.push(function () {
                googletag.display('div-gpt-ad-1509258458742-30');
              });
            </script>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!--end faka- vedio-->
  <div class=" ">
    <div class="container">
      <div class="category-padding">
        <div class="row">
          <div class="col-md-12 col-12">
            <h2 class="title">
              <a href="">
                ভিডিও</a>
              <span class="double-border"></span>
            </h2>

          </div>

        </div>
        <div class="row">
          <div class="col-md-8 col-12">
            <div class="row">
              <div class="col-md-12 col-12 photo-div">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                  </ol>

                  <div class="carousel-inner">
                    <div class="carousel-item">
                      <a href="">
                        <img src="http://via.placeholder.com/700x400">
                      </a>
                      <div class="carousel-caption">
                        <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                      </div>
                      <a href="">
                        <i class="fas fa-video photovedio-icon big-photo"></i>
                      </a>
                    </div>
                    <div class="carousel-item active">
                      <a href="">
                        <img src="http://via.placeholder.com/700x400">
                      </a>
                      <div class="carousel-caption">
                        <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                      </div>
                      <a href="">
                        <i class="fas fa-video photovedio-icon big-photo"></i>
                      </a>
                    </div>
                    <div class="carousel-item">
                      <a href="">
                        <img src="http://via.placeholder.com/700x400">
                      </a>
                      <div class="carousel-caption">
                        <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি </a>
                      </div>
                      <a href="">
                        <i class="fas fa-video photovedio-icon big-photo"></i>
                      </a>
                    </div>
                    <div class="carousel-item">
                      <a href="">
                        <img src="http://via.placeholder.com/700x400">
                      </a>
                      <div class="carousel-caption">
                        <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                      </div>
                      <a href="">
                        <i class="fas fa-video photovedio-icon big-photo"></i>
                      </a>
                    </div>
                  </div>

                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
            <!--snd row-->
            <div class="row">
              <div class="col-md-4 col-12">
                <div class="news-div subnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির বিশেষ উদ্যোগ</a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>
                    <a href="" class="float-right tags">বিশেষ প্রতিবেদন</a>
                  </div>
                  <a href="">
                    <i class="fas fa-video photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="news-div subnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির বিশেষ উদ্যোগ</a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>
                    <a href="" class="float-right tags">বিশেষ প্রতিবেদন</a>
                  </div>
                  <a href="">
                    <i class="fas fa-video photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="news-div subnews-div">
                  <div class="img-position">
                    <a href="">
                      <img src="http://via.placeholder.com/251x130" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির বিশেষ উদ্যোগ</a>
                    </h4>
                  </div>
                  <div class="category-tag">
                    <span class="float-left ">
                      <i class="fa fa-tags"></i>
                      <a href="" class="tags">সড়ক-দুর্ঘটনা</a>
                    </span>
                    <a href="" class="float-right tags">বিশেষ প্রতিবেদন</a>
                  </div>
                  <a href="">
                    <i class="fas fa-video photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
            </div>
            <!--end row-->
          </div>
          <div class="col-md-4 col-12">
            <!--photo all jonoprio-->
            <div class="multitab-section tab ">
              <!-- Nav tabs -->
              <div class="tab-menu">
                <ul class=" nav-justified">
                  <li class="active multitab-tab">
                    <a href="#content11">সর্বশেষ</a>
                  </li>
                  <li class="multitab-tab one">
                    <a href="#content12">জনপ্রিয়</a>
                  </li>
                </ul>
              </div>
              <div class="clear"></div>

              <!-- Tab panes -->
              <div class="tab-content" id="content11">
                <div class=" photo-galary">

                  <ul class="media-list">
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>

                  </ul>
                
                </div>
              </div>
              <div class="tab-content" id="content12">
                <div class=" photo-galary">

                  <ul class="media-list">
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগঅপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">

                        <a href="">
                          <img src="http://via.placeholder.com/105x55" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                        </a>
                      </div>
                      <div class="news-body">
                        <h4 class="tabnews-heading">
                          <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                        </h4>
                      </div>
                    </li>


                  </ul>
                 
                </div>
              </div>

            </div>

            <!--end-->
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection