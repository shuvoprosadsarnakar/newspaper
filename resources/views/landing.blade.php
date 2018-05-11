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
              <div class="news-div main-div">
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
                    <a href="" class="tags">
                      {{$news[0]->tags[0]->name}} 
                    </a>
                    @endif
                  </span>
                  <a href="" class="float-right tags">
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
              </div>
              <!-- end 2nd col 1st row-->
              <div class="news-div subnews-div">
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
                  <a href="" class="float-right tags">বিশেষ প্রতিবেদন</a>
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
                  <div class="fixing-div media">
                    <a class="float-left div-padding" href="">
                      <img class="media-object" src="images/three.jpg" alt="" style="width:80px;">
                    </a>
                    <div class="fixing-link">
                      <h4 class="news-heading">
                        <a href=""> আরও একটি সমাবর্তন ভাষণ</a>
                      </h4>
                    </div>
                  </div>
                  <div class="fixing-div media ">
                    <a class="float-left div-padding" href="">
                      <img class="media-object" src="http://via.placeholder.com/105x55" alt="" style="width:80px;">
                    </a>
                    <div class="fixing-link">
                      <h4 class="news-heading">
                        <a href="">রাজীবের হাত, রোজিনার পা</a>
                      </h4>
                    </div>
                  </div>
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

                      <li class="media">
                        <div class="media-left">
                          <span>১</span>
                          <a href="">
                            <img src="images/two.jpg" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
                          </a>
                        </div>
                        <div class="news-body">
                          <h4 class="tabnews-heading">
                            <a href="">রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ</a>
                          </h4>
                        </div>
                      </li>
                      
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
                      <li class="media">
                        <div class="media-left">
                          <span>১</span>
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
                          <span>২</span>
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
                          <span>৩</span>
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
                          <span>৪</span>
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
                          <span>৫</span>
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
                          <span>৬</span>
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
                          <span>৭</span>
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
                          <span>৮</span>
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
                          <span>৯</span>
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
                          <span>১০</span>
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
           <div class="col-md-4 col-12">
            <div class="news-div ">
              <div class="img-position">

                <a href="">
                  <img src="images/three.jpg" alt="">
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
           <div class="col-md-4 col-12">
            <div class="news-div ">
              <div class="img-position">

                <a href="">
                  <img src="images/three.jpg" alt="">
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
            <!---->
            <div class="col-md-4 col-12 bg-img">
              <!--fix news-->


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
  
  
                <!---->
              <!---->
            </div>
          </div>

          <!---->
          <!-- last row-->
          <div class="row ">
            <div class="col-md-3 col-6">
              <div class="news-div subnews-div ">
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
              <div class="news-div subnews-div ">
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
              <div class="news-div subnews-div ">
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
              <div class="news-div subnews-div ">
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
                  <div class=" boldfont-size ">
                    <div class="img-position">
                      <a href="">
                        <img src="images/two.jpg" alt="">
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
                          <img src="images/two.jpg" alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
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
                  <a href=""> শিক্ষা ও সাহিত্য </a>
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
            <div class="col-md-4 col-12 single-news-margin  ">

              <div class="">
                <h2 class="title  ">
                  <a href=""> কৃষি ও জীবন</a>
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
          <div class="col-md-3 col-6">
            <div class="news-div subnews-div secondnews-div">
              <div class="img-position">
                <a href="">
                  <img src="images/five.jpg" alt="">
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




<!-- last header-->
<div class="third-header ">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="topic">
                <h5 class="float-left">Hot topic:</h5>
                <ul class="menu">
                  <li>
                    <a href="" class="text-color">দেশজুড়ে</a>
                  </li>
                  <li>
                    <a href="" class="text-color">শিক্ষা ও সাহিত্য</a>
                  </li>
                  <li>
                    <a href="" class="text-color"> অর্থ ও বাণিজ্য</a>
                  </li>
                  <li>
                    <a href="" class="text-color"> ক্রিকেট</a>
                  </li>
                  <li>
                    <a href="" class="text-color"> স্বাস্থ্যকথা</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <form method="" action="">
                <div class="search-bar">
                  <input type="search" id="search" placeholder="Search..." />
                  <button type="submit">
                  <span class="icon">
                    <i class="fa fa-search"></i>
                  </span>
                </button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
<!-- end last header-->
 <!--end header start 1st row-->
 <div class="first-portion">
      <div class="container">
        <div class="row">
            @if(!$news->isEmpty() and $news->count()>1)
          <div class="col-md-8 col-12">
            <!-- image and text over image postion-->
            <div class="inner">
              <div class="news-img">
                <a href="{{route('news',['id'=>$news[0]->id])}}">
                  <img src="{{URL::asset('storage/'.$news[0]->image)}}">
                </a>
              </div>
              <div class="news-content">
                <div class="icon-bar ">
                  <a href="{{route('category',['id'=>$news[0]->news_categories->id])}}" class="button-text">
                    {{$news[0]->news_categories->category_name}}
                  </a>
                </div>

                <div class="news-link">

                  <h3>
                    <a href="{{route('news',['id'=>$news[0]->id])}}" class=" button-text">
                        {{$news[0]->title}}
                    </a>
                  </h3>

                </div>
              </div>
            </div>
            <!-- end image and text over image postion-->
          </div>
          
          <div class="col-md-4 col-12">
            <div class="inner">
              <div class="news-img">
                <a href="{{route('news',['id'=>$news[1]->id])}}">
                  <img src="{{URL::asset('storage/'.$news[1]->image)}}">
                </a>
              </div>
              <div class="news-content">
                <div class="icon-bar ">
                  <a href="{{route('category',['id'=>$news[1]->news_categories->id])}}" class="button-text">
                    {{$news[1]->news_categories->category_name}}
                  </a>
                </div>

                <div class="news-link">

                  <h4>
                    <a href="{{route('news',['id'=>$news[1]->id])}}" class=" button-text">
                      {{$news[1]->title}}
                    </a>
                  </h4>

                </div>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </div>
    <!-- end first-portion 1st row start second portion-->
    <div class="second-portion">
      <div class="container">
        <div class="row">
          @if(!$news->isEmpty())
          @foreach($news as $s_news)
          <div class="col-md-4 col-12">
            <div class="news-img">
              <a href="{{route('news',['id'=>$s_news->id])}}">
                <img src="{{URL::asset('storage/'.$s_news->image)}}" >
              </a>
            </div>
            <div class="icon-bar newsicon-position ">
              <a href="{{route('category',['id'=>$s_news->news_categories->id])}}" class="button-text">
                  {{$s_news->news_categories->category_name}}
              </a>
            </div>
            <h5>
              <a href="{{route('news',['id'=>$s_news->id])}}" class="news-text">
                  {{$s_news->title}}
              </a>
            </h5>
            <div class="news-date float-right">
              <p>{{$s_news->date}}</p>
            </div>
          </div>
 
          @endforeach
          @endif
        </div>
      </div>
    </div>

    <hr>
    <!--end second row start 3rd row-->
    <div class="third-portion">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12 horizontal-border">
            <div class="headings-tringle">
              <div class="triangle-right"></div>
              <div class="headings button-text ">
                <h4>সর্বশেষ খবর</h4>
              </div>
            </div>
            <ul class="ordernews-link popular">
              @if(!$news->isEmpty())
              @foreach($news as $s_news)
              <div class="news-date ">
                <p>{{$s_news->date}}</p>
              </div>

              <li>

                <h5>
                  <a href="" class="news-text">
                    {{str_limit($s_news->title, 60, '..')}}</a>
                </h5>
              </li>
              @endforeach
              @endif
            </ul>



          </div>
          <!--prob div-->
          <div class="col-md-4 col-12 horizontal-border">
            <div class="headings button-text">
              <h4>আলোচিত</h4>
            </div>
            <div class="content">
                @if(!$news->isEmpty())
                @foreach($news as $s_news)
              <div class="fixing-div">
                <div class="news-img float-left">
                  <a href="{{route('news',['id'=>$s_news->id])}}" class="small-img">
                    <img src="{{URL::asset('storage/'.$s_news->image)}}">
                  </a>
                </div>
                <div>
                  <div class="icon-bar smallicon-position">
                    <a href="{{route('category',['id'=>$s_news->news_categories->id])}}" class="button-text">
                        {{$s_news->news_categories->category_name}}
                      </a>
                  </div>
                  <div class="news-date float-right">{{$s_news->date}}</div>
                  <h5 class="meta-link">
                    <a href="" class="news-text">{{str_limit($s_news->title, 60, '..')}}</a>
                  </h5>

                </div>
              </div>
              <hr>
              @endforeach
              @endif
              
            </div>
          </div>
          <!-- prob-->
          <div class="col-md-4 col-12 feature">

            <div class="feature-news">
              <div class="headings button-text">
                <h4> ফিচার</h4>
              </div>
              <div class="news-img">
                <a href="{{route('news',['id'=>$news[5]->id])}}">
                  <img src="{{URL::asset('storage/'.$news[5]->image)}}">
                </a>
              </div>
              <div class="featnews-margin">

                <h5>
                  <a href="{{route('news',['id'=>$news[5]->id])}}" class="popular-news">
                      {{$news[5]->title}}
                  </a>
                </h5>
                <p class="popular-news" style="font-size:14px">
                    {{$news[5]->title}}
                </p>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end 3nd row start 4rd row-->
    <div class="fourth-portion">
      <div class="container">
        <div class="headings button-text date-category">
          <h4>জনপ্রিয় বিভাগ</h4>
        </div>
        <div class="popular">
          <div class="row">
            <div class="col-md-4 col-12">
              <div class="inner">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/349x319">
                  </a>
                </div>
                <div class="news-content">
                  <div class="icon-bar ">
                    <a href="" class="button-text">রাজনীতি</a>
                  </div>

                  <div class="news-link">

                    <h4>
                      <a href="" class=" button-text">
                        ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                      </a>
                    </h4>

                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-2 col-6">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/165x165">
                </a>
              </div>
              <div class="date-category">
                <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                <a href="" class="category float-right">জীবনশৈলী </a>
              </div>
              <div class=" pplnews-margin">
                <h5>
                  <a href="" class="popular-news">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার গরুপাচার
                  </a>
                </h5>
              </div>
            </div>
            <div class="col-md-2 col-6">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/165x165">
                </a>
              </div>
              <div class="date-category">
                <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                <a href="" class="category float-right"> বলিউড</a>
              </div>
              <div class="pplnews-margin">
                <h5>
                  <a href="" class="popular-news">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু
                  </a>
                </h5>
              </div>
            </div>
            <div class="col-md-2 col-6">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/165x165">
                </a>
              </div>
              <div class="date-category">
                <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                <a href="" class="category float-right"> জাতীয়</a>
              </div>
              <div class="pplnews-margin">
                <h5>
                  <a href="" class="popular-news">
                    বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                  </a>
                </h5>
              </div>
            </div>
            <div class="col-md-2 col-6">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/165x165">
                </a>
              </div>
              <div class="date-category">
                <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                <a href="" class="category float-right"> ক্রিকেট</a>
              </div>
              <div class="pplnews-margin">
                <h5>
                  <a href="" class="popular-news">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                  </a>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- news body 5th row start-->
     <div class="fifth-portion first-portion">
      <div class="container">
        <!--main row-->
        <div class="row">
          <div class="col-md-8 col-12 horizontal-border">
            <a href="">
              <div class="title">
                <h3>খেলাধুলা</h3>
              </div>
            </a>
            <!--first kheladhula row-->
            <div class="row imgdiv-margin">
              <div class="col-md-6 col-12 ">
                <div class="inner">
                  <div class="news-img">
                    <a href="">
                      <img src="http://via.placeholder.com/355x315">
                    </a>
                  </div>
                  <div class="news-content">
                    <div class="newsdate-small">মার্চ ২২,২o১৮</div>

                    <div class="news-link">

                      <h4>
                        <a href="" class=" button-text">
                          ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                        </a>
                      </h4>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি
                    </a>
                  </h5>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>

                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                    </a>
                  </h5>
                </div>
              </div>
            </div>

            <!-- end first row start 2nd row-->
            <div class="row imgdiv-margin">
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি
                    </a>
                  </h5>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি
                    </a>
                  </h5>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <ul class="ordernews-link">
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                </ul>
              </div>


            </div>

            <!-- end 2nd row start binodon-->
            <a href="">
              <div class="title">
                <h3>বিনোদন</h3>
              </div>
            </a>
            <div class="row imgdiv-margin">
              <div class="col-md-6 col-12">
                <div class="inner">
                  <div class="news-img">
                    <a href="">
                      <img src="http://via.placeholder.com/355x315">
                    </a>
                  </div>
                  <div class="news-content">
                    <div class="newsdate-small">মার্চ ২২,২o১৮</div>

                    <div class="news-link">

                      <h4>
                        <a href="" class=" button-text">
                          ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                        </a>
                      </h4>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি
                    </a>
                  </h5>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>

                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                    </a>
                  </h5>
                </div>
              </div>
            </div>
            <!-- end 3rd row start 4th row-->
            <div class="row">
              <div class="col-md-6 col-12">
                <!-- only link-->
                <ul class="ordernews-link">
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                </ul>
                <!-- end only link-->
              </div>
              <div class="col-md-6">
                <div class="inner">
                  <div class="news-img">
                    <a href="">
                      <img src="http://via.placeholder.com/355x315">
                    </a>
                  </div>
                  <div class="news-content">
                    <div class="newsdate-small">মার্চ ২২,২o১৮</div>

                    <div class="news-link">

                      <h4>
                        <a href="" class=" button-text">
                          ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                        </a>
                      </h4>

                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- end binodon row start bangladesh row-->
            <a href="">
              <div class="title">
                <h3>বাংলাদেশ</h3>
              </div>
            </a>
            <div class="row">
              <div class="col-md-12 col-12">
                <div class="inner">
                  <div class="news-img">
                    <a href="">
                      <img src="http://via.placeholder.com/749x400">
                    </a>
                  </div>
                  <div class="news-content">
                    <div class="newsdate-small">মার্চ ২২,২o১৮</div>

                    <div class="news-link">

                      <h3>
                        <a href="" class=" button-text">
                          ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                        </a>
                      </h3>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end 5th row start 6th row-->
            <div class="row">
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>

                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                    </a>
                  </h5>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>

                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি
                    </a>
                  </h5>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>

                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                    </a>
                  </h5>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>

                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি
                    </a>
                  </h5>
                </div>
              </div>
            </div>
            <!-- end bangladesh row start antorjatik row-->
            <a href="">
              <div class="title">
                <h3>আন্তর্জাতিক</h3>
              </div>
            </a>
            <div class="row">
              <div class="col-md-12 col-12">
                <div class="inner">
                  <div class="news-img">
                    <a href="">
                      <img src="http://via.placeholder.com/749x400">
                    </a>
                  </div>
                  <div class="news-content">
                    <div class="newsdate-small">মার্চ ২২,২o১৮</div>

                    <div class="news-link">

                      <h3>
                        <a href="" class=" button-text">
                          ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                        </a>
                      </h3>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end 7th row start 8th row-->
            <div class="row">
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>

                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                    </a>
                  </h5>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>

                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি
                    </a>
                  </h5>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <ul class="ordernews-link">
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- end antorjatik row start deshjure row-->
            <a href="">
              <div class="title">
                <h3> দেশজুড়ে</h3>
              </div>
            </a>
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="inner">
                  <div class="news-img">
                    <a href="">
                      <img src="http://via.placeholder.com/355x315">
                    </a>
                  </div>
                  <div class="news-content">
                    <div class="newsdate-small">মার্চ ২২,২o১৮</div>

                    <div class="news-link">

                      <h4>
                        <a href="" class=" button-text">
                          ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                        </a>
                      </h4>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>

                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                    </a>
                  </h5>
                </div>
              </div>
              <div class="col-md-3 col-6">
                <div class="news-img">
                  <a href="">
                    <img src="http://via.placeholder.com/163x163">
                  </a>
                </div>
                <div class="date-category">
                  <div class="news-date float-left ">মার্চ ২২,২o১৮</div>

                </div>
                <div class="sports-margin">
                  <h5>
                    <a href="" class=" news-text">
                      ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                    </a>
                  </h5>
                </div>
              </div>
            </div>
            <hr>
            <!--end deshjure row start biggan projokti-->
            <div class="row">
              <div class="col-md-6 col-12">
                <a href="">
                  <div class="title">
                    <h3> বিজ্ঞান ও প্রযুক্তি</h3>
                  </div>
                </a>
                <ul class="ordernews-link">
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                  <li>

                    <h5>
                      <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                    </h5>
                    <div>
                      <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
                      <p class="popular-news" style="font-size:14px">-৩০ বছরপর প্রমাণ হলো তিনি করেননি গরুপাচার গরুপাচার পর প্রমাণ হলো তিনি গরু পাচার করেনন........</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-md-6 col-12">
                <a href="">
                  <div class="title">
                    <h3> উচ্চশিক্ষা</h3>
                  </div>
                </a>
                <div class="inner">
                  <div class="news-img">
                    <a href="">
                      <img src="http://via.placeholder.com/355x315">
                    </a>
                  </div>
                  <div class="news-content">
                    <div class="newsdate-small">মার্চ ২২,২o১৮</div>

                    <div class="news-link">

                      <h4>
                        <a href="" class=" button-text">
                          ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                        </a>
                      </h4>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end last row-->
            <!-- main 8 column div-->
          </div>
           <!-- main column 8 end-->

          <div class="col-md-4 col-12">
            <div class="headings button-text read-title">
              <h4>সর্বাধিক পঠিত</h4>
            </div>
            <div class="content">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/450x260">
                </a>
              </div>
              <div class="date-category">
                <div class="news-date float-left ">মার্চ ২২,২o১৮</div>
              </div>
              <div class="sports-margin">
                <h5>
                  <a href="" class=" news-text">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি
                  </a>
                </h5>
              </div>
              <hr>
              <!---jhgjh-->
              <div class="fixing-div">
                <div class="news-img float-left">
                  <a href="" class="small-img">
                    <img src="http://via.placeholder.com/90x90">
                  </a>
                </div>
                <div>
                  <div class="news-date read-date">মার্চ ২২,২o১৮</div>
                  <h5 class="read-news">
                    <a href="" class="news-text">৩০ বছর পর প্রমাণ লো তিনি গরু করেনি গরুপাচার</a>
                  </h5>

                </div>
              </div>
              <hr>
              <div class="fixing-div">
                <div class="news-img float-left">
                  <a href="" class="small-img">
                    <img src="http://via.placeholder.com/90x90">
                  </a>
                </div>
                <div>

                  <div class="news-date read-date">মার্চ ২২,২o১৮</div>
                  <h5 class="read-news ">
                    <a href="" class="news-text">৩০ বছর পর প্রমাণ লো তিনি গরু লো গরুপাচার তিনি গরু </a>
                  </h5>

                </div>

              </div>
              <hr>
              <div class="fixing-div">
                <div class="news-img float-left">
                  <a href="" class="small-img">
                    <img src="http://via.placeholder.com/90x90">
                  </a>
                </div>
                <div>


                  <div class="news-date read-date ">মার্চ ২২,২o১৮</div>
                  <h5 class="read-news">
                    <a href="" class="news-text">৩০ বছর পর প্রমাণ লো তিনি গরু করেনি গরুপাচার

                    </a>
                  </h5>

                </div>
              </div>
              <hr>
              <div class="fixing-div">
                <div class="news-img float-left">
                  <a href="" class="small-img">
                    <img src="http://via.placeholder.com/90x90">
                  </a>
                </div>
                <div>


                  <div class="news-date read-date ">মার্চ ২২,২o১৮</div>
                  <h5 class="read-news">
                    <a href="" class="news-text">৩০ বছর পর প্রমাণ লো তিনি গরু করেনি গরুপাচার

                    </a>
                  </h5>

                </div>
              </div>

            </div>
            <hr>
            <!-- end most read star highlight-->
            <div class="headings button-text highlight-title">
              <h4>প্রধান</h4>
            </div>
            <div class=" highlight ">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/450x260">
                </a>
              </div>
              <div class="icon-bar highlight-position ">
                <a href="" class="button-text">বিনোদন</a>
              </div>
              <h5>
                <a href="" class="news-text">
                  ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                </a>
              </h5>
              <div class="news-date float-right ">
                <p>মার্চ ২২,২o১৮</p>
              </div>
            </div>
            <hr>
            <div class=" highlight ">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/450x260">
                </a>
              </div>
              <div class="icon-bar highlight-position ">
                <a href="" class="button-text"> জীবনশৈলী</a>
              </div>
              <h5>
                <a href="" class="news-text">
                  ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                </a>
              </h5>
              <div class="news-date float-right ">
                <p>মার্চ ২২,২o১৮</p>
              </div>
            </div>
            <hr>
            <div class="highlight ">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/450x260">
                </a>
              </div>
              <div class="icon-bar highlight-position ">
                <a href="" class="button-text"> প্রবাস খবর</a>
              </div>
              <h5>
                <a href="" class="news-text">
                  ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                </a>
              </h5>
              <div class="news-date float-right ">
                <p>মার্চ ২২,২o১৮</p>
              </div>
            </div>
            <hr>
            <div class=" highlight ">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/450x260">
                </a>
              </div>
              <div class="icon-bar highlight-position ">
                <a href="" class="button-text">রাজনীতি</a>
              </div>
              <h5>
                <a href="" class="news-text">
                  ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                </a>
              </h5>
              <div class="news-date float-right ">
                <p>মার্চ ২২,২o১৮</p>
              </div>
            </div>
            <hr>
            <!-- end highlight start popular  post-->
            <div class="headings button-text highlight-title">
              <h4>জনপ্রিয়</h4>
            </div>
            <div class="popular-blog">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/450x260">
                </a>
              </div>
              <div class="popular_news-date">
                <div class="big-date">
                  <span class="month">মার্চ</span>
                  <span class="day">২২</span>
                  <span class="year">২o১৮</span>
                </div>
                <h5>
                  <a href="" class="news-text">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                  </a>
                </h5>
              </div>
            </div>
            <hr>
            <div class="popular-blog">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/450x260">
                </a>
              </div>
              <div class="popular_news-date">
                <div class="big-date">
                  <span class="month">মার্চ</span>
                  <span class="day">২২</span>
                  <span class="year">২o১৮</span>
                </div>
                <h5>
                  <a href="" class="news-text">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                  </a>
                </h5>
              </div>
            </div>
            <hr>
            <div class="popular-blog">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/450x260">
                </a>
              </div>
              <div class="popular_news-date">
                <div class="big-date">
                  <span class="month">মার্চ</span>
                  <span class="day">২২</span>
                  <span class="year">২o১৮</span>
                </div>
                <h5>
                  <a href="" class="news-text">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                  </a>
                </h5>
              </div>
            </div>
            <hr>
            <div class="popular-blog">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/450x260">
                </a>
              </div>
              <div class="popular_news-date">
                <div class="big-date">
                  <span class="month">মার্চ</span>
                  <span class="day">২২</span>
                  <span class="year">২o১৮</span>
                </div>
                <h5>
                  <a href="" class="news-text">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                  </a>
                </h5>
              </div>
            </div>
            <hr>
            <div class="popular-blog">
              <div class="news-img">
                <a href="">
                  <img src="http://via.placeholder.com/450x260">
                </a>
              </div>
              <div class="popular_news-date">
                <div class="big-date">
                  <span class="month">মার্চ</span>
                  <span class="day">২২</span>
                  <span class="year">২o১৮</span>
                </div>
                <h5>
                  <a href="" class="news-text">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                  </a>
                </h5>
              </div>
            </div>
            <hr>



            <!-- last column-->
          </div>
          <!-- last column en-->
        </div>
        <!-- main row end-->
      </div>
    </div>
     <!-- end body news start gallery-->
     <div class="sixth-portion">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-12">
            <div class="headings ">
              <a href="" class="button-text">
                <h4>ফটো গ্যালারি</h4>
              </a>
            </div>

            <div class="img-slide">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="http://via.placeholder.com/700x400">
                    <div class="carousel-caption">
                      <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                    </div>
                    <a href="">
                      <i class="fas fa-camera photovedio-icon big-photo"></i>
                    </a>
                  </div>
                  <div class="carousel-item ">
                    <img src="http://via.placeholder.com/700x400">
                    <div class="carousel-caption">
                      <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                    </div>
                    <a href="">
                      <i class="fas fa-camera photovedio-icon big-photo"></i>
                    </a>
                  </div>
                  <div class="carousel-item">
                    <img src="http://via.placeholder.com/700x400">
                    <div class="carousel-caption">
                      <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি </a>
                    </div>
                    <a href="">
                      <i class="fas fa-camera photovedio-icon big-photo"></i>
                    </a>
                  </div>
                  <div class="carousel-item ">
                    <img src="http://via.placeholder.com/700x400">
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
          <div class="col-md-4 col-12">
            <div class="gallery-margin">
              <div class="fixing-div">
                <div class="news-img float-left">
                  <a href="" class="small-img">
                    <img src="http://via.placeholder.com/90x90">
                  </a>
                </div>
                <div>
                  <div class="icon-bar smallicon-position">
                    <a href="" class="button-text"> ভ্রমণ</a>
                  </div>
                  <h5 class="meta-link">
                    <a href="" class="popular-news">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল</a>
                  </h5>

                </div>
                <a href="">
                  <i class="fas fa-camera photovedio-icon small-photo"></i>
                </a>
              </div>
              <hr class="gallery-hr">


              <div class="fixing-div">
                <div class="news-img float-left">
                  <a href="" class="small-img">
                    <img src="http://via.placeholder.com/90x90">
                  </a>
                </div>
                <div>
                  <div class="icon-bar smallicon-position">
                    <a href="" class="button-text"> ভ্রমণ</a>
                  </div>
                  <h5 class="meta-link">
                    <a href="" class="popular-news">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল</a>
                  </h5>

                </div>
                <a href="">
                  <i class="fas fa-camera photovedio-icon small-photo"></i>
                </a>
              </div>
              <hr class="gallery-hr">

              <div class="fixing-div">
                <div class="news-img float-left">
                  <a href="" class="small-img">
                    <img src="http://via.placeholder.com/90x90">
                  </a>
                </div>
                <div>
                  <div class="icon-bar smallicon-position">
                    <a href="" class="button-text"> স্বাস্থ্যকথা</a>
                  </div>
                  <h5 class="meta-link">
                    <a href="" class="popular-news">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল</a>
                  </h5>

                </div>
                <a href="">
                  <i class="fas fa-camera photovedio-icon small-photo"></i>
                </a>
              </div>
              <hr class="gallery-hr">
              <div class="fixing-div">
                <div class="news-img float-left">
                  <a href="" class="small-img">
                    <img src="http://via.placeholder.com/90x90">
                  </a>
                </div>
                <div>
                  <div class="icon-bar smallicon-position">
                    <a href="" class="button-text"> বিনোদন</a>
                  </div>
                  <h5 class="meta-link">
                    <a href="" class="popular-news">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল</a>
                  </h5>

                </div>
                <a href="">
                  <i class="fas fa-camera photovedio-icon small-photo"></i>
                </a>
              </div>
              <hr class="gallery-hr">
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- galary end  and  start vedio -->
    <!-- start carosol-->
    <div class="last-portion">
      <div class="container-fluid">
        <!-- start-->
        <div class="headings">
          <a href="" class="button-text">
            <h4>ভিডিও</h4>
          </a>
        </div>
        <div class="row clickable-news">
          <div class="col-md-12 col-12">
            <div id="customers-testimonials" class="owl-carousel">

              <!--news 1 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="img-responsive" src="http://via.placeholder.com/419x279" alt="">
                  <div class="carousel-caption">
                      
                      <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                    </div>
                </div>
                <a href="">
                  <i class="fas fa-video photovedio-icon big-photo"></i>
                </a>
              </div>

              <!--END OF news 1 -->
              <!--news 2 -->
              <div class="item">

                <div class="shadow-effect">
                  <img class="img-responsive" src="http://via.placeholder.com/419x279" alt="">
                  <div class="carousel-caption">
                      
                      <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                    </div>
                </div>
                <a href="">
                  <i class="fas fa-video photovedio-icon big-photo"></i>
                </a>
              </div>
              <!--END OF news 2 -->
              <!--news 3 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="img-responsive" src="http://via.placeholder.com/419x279" alt="">
                  <div class="carousel-caption">
                      
                      <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                    </div>
                </div>
                <a href="">
                  <i class="fas fa-video photovedio-icon big-photo"></i>
                </a>
              </div>
              <!--END OF news 3 -->
              <!--news 4 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="img-responsive" src="http://via.placeholder.com/419x279" alt="">
                  <div class="carousel-caption">
                      
                      <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                    </div>
                </div>
                <a href="">
                  <i class="fas fa-video photovedio-icon big-photo"></i>
                </a>
              </div>
              <!--END OF news 4 -->
              <!--news 5 -->
              <div class="item">
                <div class="shadow-effect">
                  <img class="img-responsive" src="http://via.placeholder.com/419x279" alt="">
                  <div class="carousel-caption">
                      
                      <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                    </div>
                </div>
                <a href="">
                  <i class="fas fa-video photovedio-icon big-photo"></i>
                </a>
              </div>
              <!--END OF news 5 -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END OF news -->
    <!--end-->
    <!-- end vedio-->
    <div class="first-portion">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12 horizontal-border ">
            <a href="">
              <div class="title ">
                <h4>সর্বশেষ খবর</h4>
              </div>
            </a>
            <ul class="ordernews-link fifth-portion">
              <div class="recent-post">
                <span class="icon-bar ">
                  <a href="" class="button-text">ভ্রমণ</a>
                </span>
                <span class="news-date post">মার্চ ২২,২o১৮</span>
              </div>
              <li>

                <h5>
                  <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                </h5>
              </li>

              <div class="recent-post">
                <span class="icon-bar ">
                  <a href="" class="button-text">ভ্রমণ</a>
                </span>
                <span class="news-date post">মার্চ ২২,২o১৮</span>
              </div>
              <li>

                <h5>
                  <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                </h5>
              </li>
              <div class="recent-post">
                <span class="icon-bar">
                  <a href="" class="button-text">ভ্রমণ</a>
                </span>
                <span class="news-date post">মার্চ ২২,২o১৮</span>
              </div>
              <li>

                <h5>
                  <a href="" class="news-text"> ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার</a>
                </h5>
              </li>
            </ul>


          </div>
          <!-- end latest news start recent news-->
          <div class="col-md-4 col-12 horizontal-border">
            <a href="">
              <div class="title ">
                <h4> সাম্প্রতিক খবর</h4>
              </div>
            </a>
            <div class="">
              <div class="popular_news-date">
                <div class="big-date">
                  <span class="month">মার্চ</span>
                  <span class="day">২২</span>
                  <span class="year">২o১৮</span>
                </div>
                <div class="icon-bar button-text block-date">
                  <a class="href">ভ্রমণ</a>
                </div>
                <h5>
                  <a href="" class="news-text">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                  </a>
                </h5>
              </div>
            </div>
            <hr>
            <div class="">
              <div class="popular_news-date">
                <div class="big-date">
                  <span class="month">মার্চ</span>
                  <span class="day">২২</span>
                  <span class="year">২o১৮</span>
                </div>
                <div class="icon-bar button-text block-date">
                  <a class="href">ভ্রমণ</a>
                </div>
                <h5>
                  <a href="" class="news-text ">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                  </a>
                </h5>
              </div>
            </div>
            <hr>
            <div class="">
              <div class="popular_news-date">
                <div class="big-date">
                  <span class="month">মার্চ</span>
                  <span class="day">২২</span>
                  <span class="year">২o১৮</span>
                </div>
                <div class="icon-bar button-text block-date">
                  <a class="href">ভ্রমণ</a>
                </div>
                <h5>
                  <a href="" class="news-text">
                    ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                  </a>
                </h5>

              </div>
            </div>
            <hr>

          </div>
          <!-- end recent news-->
          <div class="col-md-4 col-12 comment-ptag">
            <a href="">
              <div class="title ">
                <h4>জনমত</h4>
              </div>
            </a>

            <ul class="ordernews-link fifth-portion read-title">
              <div class="recent-post">
                <span class="">
                  <i class="far fa-user"></i>
                </span>
                <span class="news-date post">মার্চ ২২,২o১৮</span>
              </div>
              <li>

                <p class="popular-news">
                  ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                </p>
              </li>

              <div class="recent-post">
                <span class="">
                  <i class="far fa-user"></i>
                </span>
                <span class="news-date post">মার্চ ২২,২o১৮</span>
              </div>
              <li>

                <p class="popular-news">
                  ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                </p>
              </li>
              <div class="recent-post">
                <span class="">
                  <i class="far fa-user"></i>
                </span>
                <span class="news-date post">মার্চ ২২,২o১৮</span>
              </div>
              <li>

                <p class="popular-news">
                  ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
                </p>
              </li>
            </ul>
          </div>
          <!-- end comment-->
        </div>
      </div>
    </div>
    <hr>
@endsection