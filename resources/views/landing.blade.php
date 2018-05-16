@extends('layouts.master') @section('content')



<!--end header start 1st row-->

<div class="first-portion">
  <div class="container">
    <div class="row">
      <!-- main col-8-->
      <div class="col-md-8 col-12">
        <div class="row">
          @if(!$f_news->isEmpty() and $f_news->count()>1)
          <div class="col-md-8 col-12">
            <!--first img-->
            <div class="news-div main-div dropshadow">
              <div class="img-position">

                <a href="{{route('news',['id'=>$f_news[0]->id])}}">
                  <img src="{{URL::asset('storage/'.$f_news[0]->image)}}" alt="">
                </a>
              </div>
              <div class="news-link">
                <h3>
                  <a href="{{route('news',['id'=>$f_news[0]->id])}}">
                    {{str_limit($f_news[0]->title, 52, '..')}}
                  </a>
                </h3>
                <p>
                  {{str_limit(strip_tags($f_news[0]->description), 180, '..')}}
                </p>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  @if(!$f_news[0]->tags->isEmpty() and $f_news[0]->tags->count()>0)
                  <i class="fa fa-tags"></i>
                  <a href="{{route('tags',['tag'=>$f_news[0]->tags[0]->name])}}" class="tags">
                    {{$f_news[0]->tags[0]->name}}
                  </a>
                  @endif
                </span>
                <a href="{{route('category',['id'=>$f_news[0]->news_categories->id])}}" class="float-right tags">
                  {{$f_news[0]->news_categories->category_name}}
                </a>
              </div>
            </div>
            <!-- end fisrt img-->
          </div>
          <div class="col-md-4 col-12">
            <!-- 2nd colmnn 1st row-->
            <div class="news-div subnews-div">
              <div class="img-position">
                <a href="{{route('news',['id'=>$f_news[1]->id])}}">
                  <img src="{{URL::asset('storage/'.$f_news[1]->image)}}" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="{{route('news',['id'=>$f_news[1]->id])}}">
                    {{str_limit($f_news[1]->title, 70, '..')}}
                  </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  @if(!$f_news[1]->tags->isEmpty() and $f_news[1]->tags->count()>0)
                  <i class="fa fa-tags"></i>
                  <a href="{{route('tags',['tag'=>$f_news[1]->tags[0]->name])}}" class="tags">
                    {{$f_news[1]->tags[0]->name}}
                  </a>
                  @endif
                </span>
                <a href="{{route('category',['id'=>$f_news[1]->news_categories->id])}}" class="float-right tags">
                  {{$f_news[1]->news_categories->category_name}}
                </a>
              </div>
            </div>
            <!-- end 2nd col 1st row-->
            <div class="news-div subnews-div">
              <div class="img-position">
                <a href="{{route('news',['id'=>$f_news[2]->id])}}">
                  <img src="{{URL::asset('storage/'.$f_news[2]->image)}}" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="{{route('news',['id'=>$f_news[2]->id])}}">
                    {{str_limit($f_news[2]->title, 70, '..')}}
                  </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  @if(!$f_news[2]->tags->isEmpty() and $f_news[2]->tags->count()>0)
                  <i class="fa fa-tags"></i>
                  <a href="{{route('tags',['tag'=>$f_news[2]->tags[0]->name])}}" class="tags">
                    {{$f_news[2]->tags[0]->name}}
                  </a>
                  @endif
                </span>
                <a href="{{route('category',['id'=>$f_news[2]->news_categories->id])}}" class="float-right tags">
                  {{$f_news[2]->news_categories->category_name}}
                </a>
              </div>
            </div>
          </div>
          @endif
        </div>
        <!-- end first row st 2nd row -->
        <div class="row">
          @if(!$f_news->isEmpty() and $f_news->count()>5) 
          @for ($i = 3; $i < 6; $i++)
          <div class="col-md-4 col-12">
            <div class="news-div subnews-div">
              <div class="img-position">
                <a href="{{route('news',['id'=>$f_news[$i]->id])}}">
                  <img src="{{URL::asset('storage/'.$f_news[$i]->image)}}" alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="{{route('news',['id'=>$f_news[$i]->id])}}">
                    {{str_limit($f_news[$i]->title, 60, '..')}}
                  </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  @if(!$f_news[$i]->tags->isEmpty() and $f_news[$i]->tags->count()>0)
                  <i class="fa fa-tags"></i>
                  <a href="" class="tags">
                    {{$f_news[$i]->tags[0]->name}}
                  </a>
                  @endif
                </span>
                <a href="{{route('category',['id'=>$f_news[$i]->news_categories->id])}}" class="float-right tags">
                  {{$f_news[$i]->news_categories->category_name}}
                </a>
              </div>
            </div>
          </div>
          @endfor
          @endif
        </div>

      </div>
      <!--end main col-8-->
      <div class="col-md-4 col-12">
        <div class="row">
          <div class="col-md-12">

            <ul class="social-icon first-social-icon">
              <li>
                <a href="">
                  <span class="icon-border">
                    <i class="fab fa-facebook-f icon-color"></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="icon-border">
                    <i class="fab fa-youtube icon-color"></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="icon-border">
                    <i class="fab fa-twitter icon-color"></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="icon-border">
                    <i class="fab fa-instagram icon-color"></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="">
                  <span class="icon-border">
                    <i class="fab fa-google-plus icon-color"></i>
                  </span>
                </a>
              </li>

            </ul>

          </div>
        </div>

        <!-- gap row-->
        <div class="row">
          <div class="col-md-12 col-12 gap-rowtop">
            <div class="text-center">
              <!-- /21655469720/tbtNews_Desktop_Home_Special_Box_RB_B -->
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
              <!-- /21655469720/tbtNews_Desktop_Home_Special_Box_RB_B -->
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
                <div class=" multitab-widget-content div-shadow">
                  <ul class="media-list">
                    @if(!$latestnews->isEmpty()) @foreach($latestnews as $sp_news)
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
                    @endforeach @endif
                  </ul>
                  <!--all news-->
                  <div class="allnews">
                    <a href="" rel="">More News</a>
                  </div>
                  <!--end all news-->
                </div>
              </div>
              <div class="tab-content" id="content8">
                <div class=" multitab-widget-content div-shadow">
                  <ul class="media-list">
                    @if(!$popularnews->isEmpty()) @foreach($popularnews as $sp_news)
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
                    @endforeach @endif
                  </ul>
                  <!--all news-->
                  <div class="allnews">
                    <a href="" rel="">More News</a>
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
            <!-- /21655469720/tbtNews_Desktop_Home_Special_Box_RB_F -->
            <div id="div-gpt-ad-1509258458742-28" style="height:135px; ">
              <script>
              </script>
            </div>
          </div>


          <div class="col-md-12 col-12 ">
            <div class="text-center">
              <a href="" rel="nofollow" target="_blank">
                <img src="" alt="">
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

        <!-- /21655469720/tbtNews_Desktop_Home_Sports_Below_A -->
        <div id="div-gpt-ad-1509258458742-29" style="margin:auto;">
          <script>
            googletag.cmd.push(function () {
              googletag.display('div-gpt-ad-1509258458742-29');
            });
          </script>
        </div>
      </div>
      <div class="col-md-6 col-6 ">

        <!-- /21655469720/tbtNews_Desktop_Home_Sports_Below_B -->
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
              <a href="">Bangladesh</a>
              <span class="double-border"></span>
            </h2>

          </div>

        </div>
        <div class="row">
          @if(!$bangladesh_news->isEmpty() and $bangladesh_news->count()>2)
          @for ($i = 0; $i < 3; $i++)
          <div class="col-md-4 col-12">
            <div class="news-div ">
              <div class="img-position">

                <a href="{{route('news',['id'=>$bangladesh_news[$i]->id])}}">
                  <img src="{{URL::asset('storage/'.$bangladesh_news[$i]->image)}}" alt="">
                </a>
              </div>
              <div class="news-link secondnews-link">
                <h4>
                  <a href="{{route('news',['id'=>$bangladesh_news[$i]->id])}}">
                    {{$bangladesh_news[$i]->title}}
                  </a>
                </h4>

              </div>
              <div class="category-tag">
                <span class="float-left ">
                  @if(!$bangladesh_news[$i]->tags->isEmpty() and $bangladesh_news[$i]->tags->count()>0)
                  <i class="fa fa-tags"></i>
                  <a href="{{route('tags',['tag'=>$bangladesh_news[$i]->tags[0]->name])}}" class="tags">
                    {{$bangladesh_news[$i]->tags[0]->name}}
                  </a>
                  @endif
                </span>

              </div>
            </div>
          </div>
          @endfor
          @endif
        </div>

        <!---->
        <!-- last row-->
        <div class="row ">
          @if(!$bangladesh_news->isEmpty() and $bangladesh_news->count()>6) 
          @for ($i = 3; $i < 7; $i++)
          <div class="col-md-3 col-12">
            <div class="news-div subnews-div ">
              <div class="img-position">
                <a href="{{route('news',['id'=>$bangladesh_news[$i]->id])}}">
                  <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg',$bangladesh_news[$i]->image))}}" alt="{{str_limit($sp_news->title, 60, '..')}}"
                    alt="">
                </a>
              </div>
              <div class="news-link">
                <h4>
                  <a href="{{route('news',['id'=>$bangladesh_news[$i]->id])}}">
                    {{str_limit($bangladesh_news[$i]->title, 60, '..')}}
                  </a>
                </h4>
              </div>
              <div class="category-tag">
                <span class="float-left ">
                  @if(!$bangladesh_news[$i]->tags->isEmpty() and $bangladesh_news[$i]->tags->count()>0)
                  <i class="fa fa-tags"></i>
                  <a href="{{route('tags',['tag'=>$bangladesh_news[$i]->tags[0]->name])}}" class="tags">
                    {{$bangladesh_news[$i]->tags[0]->name}}
                  </a>
                  @endif
                </span>


              </div>
            </div>
          </div>
          @endfor
          @endif
        </div>
        <!--end last row-->
      </div>


    </div>
  </div>
</div>
<!--end bangladesh st entertainmen-->
<div class="singlecategory-portion">
  <div class="container">
    <div class="category-padding">
      <div class="row">
        <div class="col-md-12 col-12">
          <h2 class="title">
            <a href=""> Sports</a>
            <span class="double-border"></span>
          </h2>

        </div>
      </div>
      <div class="row">
        @if(!$sports_news->isEmpty() and $sports_news->count()>0) 
        @foreach($sports_news as $sp_news)
        <div class="col-md-3 col-12">
          <div class="news-div subnews-div secondnews-div">
            <div class="img-position">
              <a href="{{route('news',['id'=>$sp_news->id])}}">
                <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" alt="">
              </a>
            </div>
            <div class="news-link">
              <h4>
                <a href="{{route('news',['id'=>$sp_news->id])}}">
                    {{str_limit($sp_news->title, 150, '..')}}
                </a>
              </h4>
            </div>
            <div class="category-tag">
              <span class="float-left ">
                  @if(!$sp_news->tags->isEmpty() and $sp_news->tags->count()>0)
                  <i class="fa fa-tags"></i>
                  <a href="{{route('tags',['tag'=>$sp_news->tags[0]->name])}}" class="tags">
                    {{$sp_news->tags[0]->name}}
                  </a>
                  @endif
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

<!--end entertainment st single-->
<div class=" " style="margin-bottom: 20px;">
  <div class="container">
    <div class="row  category-padding singlecategory-font">
      <!---->
      <div class="col-md-12 col-12 ">
        <div class="row">
          @include('partials.singlemedia', ['category'=>'world','news' => $news,'motamotnews'=>$motamotnews])
  
        </div>

      </div>
      <!---->
      <div class="col-md-4 col-12 single-news-margin">
        <!--ad-->
        <div class="text-center">
          <div class="row">
            <div class="col-md-12 col-12 gap-rowbottom">

              <!-- /21655469720/tbtNews_Desktop_Home_Economic_RB_A -->
              <div id="div-gpt-ad-1509258458742-18" style="height:135px;margin:auto;">
                <script>
                  googletag.cmd.push(function () {
                    googletag.display('div-gpt-ad-1509258458742-18');
                  });
                </script>
              </div>
            </div>
            <div class="col-md-12 col-12 gap-rowbottom">

              <!-- /21655469720/tbtNews_Desktop_Home_Economic_RB_B -->
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
            <a href=""> Entertainment </a>
            <span class="double-border"></span>
          </h2>

        </div>
      </div>
      <div class="row">
        @if(!$binodon_news->isEmpty() and $binodon_news->count()>4) @foreach($binodon_news as $sp_news)
        <div class="col-md-3 col-12">
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
        @endforeach @endif
      </div>
    </div>
  </div>
</div>
<!-- end binodon st it-->

<!--end it- st kheladhula-->


<!--faka-->
<div class="singlecategory-portion">
  <div class="container">
    <div class="row  empty-div">
      <div class="col-md-6 col-6">

        <!-- /21655469720/tbtNews_Desktop_Home_Sports_Below_A -->
        <div id="div-gpt-ad-1509258458742-29" style="margin:auto;">
          <script>
            googletag.cmd.push(function () {
              googletag.display('div-gpt-ad-1509258458742-29');
            });
          </script>
        </div>
      </div>
      <div class="col-md-6 col-6">

        <!-- /21655469720/tbtNews_Desktop_Home_Sports_Below_B -->
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
    <div class="row  category-padding singlecategory-font">
      <!---->


      <div class="col-md-3 col-12 ">

        <div class="">
          <h2 class="title  ">
            <a href=""> Travel </a>
            <span class="double-border"></span>
          </h2>
          <!--news-->

          <div class="singlecategory-portion div-shadow">
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
          <a href="" rel=""> All news</a>
        </div>
      </div>
      <div class="col-md-3 col-12 single-news-margin">

        <div class="">
          <h2 class="title  ">
            <a href=""> Lifestyle</a>
            <span class="double-border"></span>
          </h2>
          <!--news-->

          <div class="singlecategory-portion div-shadow">
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
          <a href="" rel=""> All news </a>
        </div>
      </div>
      <div class="col-md-3 col-12 single-news-margin">

        <div class="">
          <h2 class="title  ">
            <a href="">Job</a>
            <span class="double-border"></span>
          </h2>
          <!--news-->

          <div class="singlecategory-portion div-shadow">
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
          <a href="" rel=""> All news</a>
        </div>
      </div>




      <div class="col-md-3 col-12 single-news-margin ">

        <div class="">
          <h2 class="title  ">
            <a href="">Bangla version</a>
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
          <a href="" rel=""> All news</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end single-->



<!--end antojato- st photogalary-->
<div class="">
  <div class="container">
    <div class="category-padding">
      <div class="row">
        <div class="col-md-12 col-12">
          <h2 class="title">
            <a href="">Photo Gallery</a>
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
                  <a href="#content9">LATEST</a>
                </li>
                <li class="multitab-tab one">
                  <a href="#content10">POPULAR</a>
                </li>
              </ul>
            </div>
            <div class="clear"></div>

            <!-- Tab panes -->
            <div class="tab-content" id="content9">
              <div class=" photo-galary">

                <ul class="media-list">
                  @foreach($latestnews as $latestnewsone)
                  <li class="media">
                    <div class="media-left">

                      <a href="">
                        <img src="http://via.placeholder.com/105x55" alt="">
                      </a>
                    </div>
                    <div class="news-body">
                      <h4 class="tabnews-heading">
                        <a href="">{{$latestnewsone->title}}</a>
                      </h4>
                    </div>
                  </li>
                  @endforeach
                </ul>

              </div>
            </div>
            <div class="tab-content" id="content10">
              <div class=" photo-galary">

                <ul class="media-list">
                  @foreach($random_news as $random_news_one)
                  <li class="media">
                    <div class="media-left">

                      <a href="">
                        <img src="http://via.placeholder.com/105x55" alt="{{$random_news_one->title}}">
                      </a>
                    </div>
                    <div class="news-body">
                      <h4 class="tabnews-heading">
                        <a href="{{route('news',$random_news_one->id)}}">{{$random_news_one->title}}</a>
                      </h4>
                    </div>
                  </li>
                  @endforeach


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

        <!-- /21655469720/tbtNews_Desktop_Home_Sports_Below_A -->
        <div id="div-gpt-ad-1509258458742-29" style="margin:auto;">
          <script>
            googletag.cmd.push(function () {
              googletag.display('div-gpt-ad-1509258458742-29');
            });
          </script>
        </div>
      </div>
      <div class="col-md-6 col-6 ">

        <!-- /21655469720/tbtNews_Desktop_Home_Sports_Below_B -->
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


@endsection