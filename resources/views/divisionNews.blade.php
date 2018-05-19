@extends('layouts.master') @section('content')

<div class="innerpage-header " style=" background-image: url(images/back.png);">
  <div class="first-category sub-category">
    <div class="container">
      <div class="row ">
        <div class="col-md-12 col-12">
          <a href="">
            <div class="category-name">
              <h3>@if($category_name)
                {{$category_name->name}}
                @endif
              </h3>
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

              @foreach($subcategories as $category)

              <li>
                <a href="{{url('subDistrict/'.$category->id)}}" class="text-color">{{$category->name}}</a>
              </li>

              @endforeach

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
        <span>
            @if($category_name)
            {{$category_name->name}}
            @endif
        </span>
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
                @if(!$allUpozilas->isEmpty() and $allUpozilas->count()>0) @foreach($allUpozilas as $sp_news)
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
                @endforeach @endif
              </div>
            </div>
          </div>
          <!--aro button-->
          <div class="text-center gap-rowbottom" style="text-align: center;">
            <div id="more-news" style="margin: 0 auto;">
              {{$allUpozilas->links()}}
            </div>
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
                    googletag.cmd.push(function () {
                      googletag.display('div-gpt-ad-1509258458742-0');
                    });
                  </script>
                </div>
              </div>
            </div>
          </div>
          <!--end add-->
          <div class="row">
            <div class="col-md-12 col-12">
              
            </div>
          </div>
          <!--ad-->
          <div class="text-center">
            <div class="row">
              <div class="col-md-12 col-12 gap-rowtopbottom">
                <!-- /21655469720/tbtNews_Desktop_Category_RB_A / height:280px; width:336px;-->
                <div id="div-gpt-ad-1509258458742-0" style="margin:auto;">
                  <script>
                    googletag.cmd.push(function () {
                      googletag.display('div-gpt-ad-1509258458742-0');
                    });
                  </script>
                </div>
              </div>
            </div>
          </div>
          <!--end add-->
          <div class="row">
            <div class="col-md-12 col-12">
                @include('partials.latestpopular', ['latestnews'=>$latestnews,'popularnews' => $popularnews])

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
              googletag.cmd.push(function () {
                googletag.display('div-gpt-ad-1509258458742-2');
              });
            </script>
          </div>
        </div>
      </div>
    </div>
    <!--end ad-->
  </div>

  @endsection