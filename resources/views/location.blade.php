 @extends('layouts.master') 
 @section('content')

<div class="innerpage-header " style=" background-image: url(images/back.png);">
  <div class="first-category sub-category">
    <div class="container">
      <div class="row ">
        <div class="col-md-12 col-12">
          <a href="">
            <div class="category-name">
              <h3>{{$category_name->name}}</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="sub-category">
    <div class="container">
      <div class="row">
          
        <div class="col-md-8 col-12">
             
          <div class="category-submenu">
              @if(!$subcategories->isEmpty() and $subcategories->count()>0)
            <span class="menu-dropdown">
              <i class="fas fa-angle-down"></i>
            </span>
            <div class="menu-warp" style="display:none;">
              <div id="secondary-menu" class="secondary-menu">
                <ul class="">
                  
                  @foreach($subcategories as $category)

                  <li>
                    <a href="{{route('category',['id'=>$category->id])}}" class="text-color">{{$category->name}}</a>
                  </li>

                  @endforeach 
                </ul>
              </div>
            </div>
            @endif
          </div>
          

          <!-- end for mobile sub category-->
          <div class="topic">

            <ul class="menu">
              {{-- @if(!$subcategories->isEmpty() and $subcategories->count()>0) 
              @foreach($subcategories as $category)

              <li>
                <a href="{{url('subDistrict/'.$category->id)}}" class="text-color">{{$category->name}}</a>
              </li>

              @endforeach 
              @endif --}}
            </ul>
          </div>
        </div>
        <div class="col-md-4 ">
          @include('layouts.searchinput')
        </div>
      </div>

    </div>
  </div>
</div>
<div class="category-name">
  <div class="container">
    <div class="">
      <a href="" class="news-date">
        <span>
          <i class="fas fa-home"></i>
        </span>
        <span>
          <i class="fas fa-angle-right"></i>
        </span>
        {{-- <span>
            {{$category_name->category_name}}
        </span> --}}
      </a>
    </div>
  </div>

  <!-- main news-->
  <div class="">
    <div class="container">
      <div class="row">
        <!--main 8 col-->
        <div class="col-md-8 col-12">
          <div class="row">
            <div class="col-md-12 col-12">
              
              <!--first col12-->
              <div class="row">
                  @if(!$allUpozilas->isEmpty() and $allUpozilas->count()>0) 
                  @foreach($allUpozilas as $sp_news)
                <!--col 6 pasapasi news-->
                <div class="col-md-6 col-12">
                  <div class="news-div cat-div">
                    <div class="row">
                      <div class="col-md-5 col-5">
                        <div class="img-box">
                          <a href="{{route('news',['id'=>$sp_news->id])}}">
                            <img alt="{{str_limit($sp_news->title, 60, '..')}}" src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}">
                          </a>
                        </div>
                      </div>
                      <div class="col-md-7 col-7 reduce-padding">
                        <div class="category-name gap-rowright">
                          <h4>
                            <a href="{{route('news',['id'=>$sp_news->id])}}" title="">
                              {{str_limit($sp_news->title, 100, '..')}}
                            </a>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end passap col -->
                @endforeach
                @endif
              </div>
            </div>
          </div>
          <!--aro button-->
          <div class="text-center gap-rowbottom" style="text-align: center;">
            <div id="more-news" style="margin: 0 auto;">
               {{$allUpozilas->links()}}</div>
          </div>
          <!--aro button-->
        </div>
        <!--end main 8 st 4-->
        <div class="col-md-4 col-12">
          <!--ad-->
          <div class="text-center">
              <div class="row">
                <div class="col-md-12 col-12 gap-rowtopbottom">
                                    <!-- /21655469720/tbtNews_Desktop_Category_RB_A / height:280px; width:336px;-->
                    <div id="div-gpt-ad-1509258458742-0" style="margin:auto;">
                      <script>
                        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1509258458742-0'); });
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
                    <li class="active second-tab">
                      <a href="#content14">বিনোদন</a>
                    </li>
                    <li class=" second-tab one">
                      <a href="#content15">খেলাধুলা</a>
                    </li>
                    <li class="second-tab one">
                        <a href="#content16"> জীবনশৈলী</a>
                      </li>
                  </ul>
                </div>
                <div class="clear"></div>

                <!-- Tab panes -->
                <div class="tab-content" id="content14">
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
                      <a href="" rel="">বিনোদনের সবখবর</a>
                    </div>
                    <!--end all news-->
                  </div>
                </div>
                <div class="tab-content" id="content15">
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
                      <a href="" rel="">খেলাধুলার সবখবর</a>
                    </div>
                    <!--end all news-->
                  </div>
                </div>
                <div class="tab-content" id="content16">
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
                        <a href="" rel=""> জীবনশৈলীর সবখবর</a>
                      </div>
                      <!--end all news-->
                    </div>
                  </div>

              </div>
              </div>
              </div>
                <!--ad-->
          <div class="text-center">
              <div class="row">
                <div class="col-md-12 col-12 gap-rowtopbottom">
                                    <!-- /21655469720/tbtNews_Desktop_Category_RB_A / height:280px; width:336px;-->
                    <div id="div-gpt-ad-1509258458742-0" style="margin:auto;">
                      <script>
                        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1509258458742-0'); });
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

        </div>
        <!--end 4-->
      </div>
    </div>
  </div>
  <!--end main news-->
  <div class="singlecategory-portion">
    <!--ad-->
    <div class="container text-center gap-rowtopbottom ">
        <div class="row">
          <div class="col-md-12">
            <!-- /21655469720/tbtNews_Desktop_Common_Footer / height:90px; width:970px;-->
            <div id="div-gpt-ad-1509258458742-2" style="margin:auto;">
              <script>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1509258458742-2'); });
              </script>
            </div>
          </div>
        </div>
      </div>
    <!--end ad-->
  </div>

  @endsection