@extends('layouts.master') 

@section('content')

<div class="third-header ">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="topic">
          <h5 class="float-left">Hot topic:</h5>
          <ul class="menu">

            <li>
              <a href="{{route('category',['id'=>'Economy'])}}" class="text-color"> Economy</a>
            </li>
            <li>
              <a href="{{route('category',['id'=>'Cricket'])}}" class="text-color"> Cricket</a>
            </li>
            <li>
              <a href="{{route('category',['id'=>'Health care'])}}" class="text-color"> Health care</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
          @include('layouts.searchinput')
      </div>
    </div>
  </div>
</div>
<!--end header start 1st row-->

<div class="first-portion">
  <div class="container">
    <div class="row">
      <!-- main col-8-->
      <div class="col-md-8 col-12">
        <div class="row">
          @if(!$f_news->isEmpty() and $f_news->count()>2)
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
          @if(!$f_news->isEmpty() and $f_news->count()>6) 
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
          <div class="col-md-12">
              <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=Asia%2FDhaka" width="100%" height="90" frameborder="0" seamless>
              </iframe>
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
            @include('partials.latestpopular', ['latestnews'=>$latestnews,'popularnews' => $popularnews])
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
          @if($bangladesh_news)
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
          @endif
        </div>

        <!---->
        <!-- last row-->
        <div class="row ">
          @if($bangladesh_news)
          @if(!$bangladesh_news->isEmpty() and $bangladesh_news->count()>6) 
          @for ($i = 3; $i < 7; $i++)
          <div class="col-md-3 col-12">
            <div class="news-div subnews-div ">
              <div class="img-position">
                <a href="{{route('news',['id'=>$bangladesh_news[$i]->id])}}">
                  <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg',$bangladesh_news[$i]->image))}}" alt="{{str_limit($bangladesh_news[$i]->title, 60, '..')}}"
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

    @include('partials.newssection', ['category'=>'Sports','sports_news' => $sports_news])
  
  </div>
</div>

<!--end entertainment st single-->
<div class=" " style="margin-bottom: 20px;">
  <div class="container">
    <div class="row  category-padding singlecategory-font">
      <!---->
      <div class="col-md-12 col-12 ">
        <div class="row">
          @include('partials.singlemedia', ['category'=>'Higher education','news' => $education_news])
          @include('partials.singlemedia', ['category'=>'Campus news','news' => $campus_news])
          @include('partials.singlemedia', ['category'=>'Health','news' => $Health_news])
          @include('partials.singlemedia', ['category'=>'Jobs','news' => $jobs_news])
          
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
        @if(!$binodon_news->isEmpty() and $binodon_news->count()>0) 
        @foreach($binodon_news as $sp_news)
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

      @include('partials.singlemedia', ['category'=>'World','news' => $world_news])
      @include('partials.singlemedia', ['category'=>'Travel','news' => $travel_news])
      @include('partials.singlemedia', ['category'=>'Agriculture','news' => $agriculture_news])
      
    </div>
  </div>
</div>
<!--end single-->



<!--end antojato- st photogalary-->
@if($photo_news)
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
                  @if(!$photo_news->isEmpty() and $photo_news->count()>0)
                  @for ($i = 0; $i < count(json_decode($photo_news[0]->multipleimages,true)); $i++)
                  <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class=""></li>
                  @endfor
                  @endif
                </ol>

                <div class="carousel-inner">
                  @if(!$photo_news->isEmpty() and $photo_news->count()>0)
                  @foreach (json_decode($photo_news[0]->multipleimages,true) as $photo)
                  <div class="carousel-item">
                    <a href="">
                      <img src="{{URL::asset('storage/'.str_replace('.jpeg','-medium.jpeg',$photo))}}">
                    </a>
                    <div class="carousel-caption">
                      <a href="" class="button-text">সংগীত পরিবেশন করছে চিরকুট ব্যান্ডের ভোকাল সুমি</a>
                    </div>
                    <a href="">
                      <i class="fas fa-camera photovedio-icon big-photo"></i>
                    </a>
                  </div>
                  @endforeach
                  @endif

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
         
          <!--end-->
        </div>
      </div>
    </div>
  </div>
</div>
@endif
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