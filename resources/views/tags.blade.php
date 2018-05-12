@extends('layouts.master') @section('content')

<div class="container">
  <div class="row">
    <!--main 8 col-->
    <div class="col-md-3 col-12">
      <div class=" news-div  auto ">
        <div class="news-tags">
          <h4 style="font-size:1em">বিষয়: </h4>
          <div class="timing-details"></div>
          <ul>
            <li>
              <a href="">বুদ্ধিমান</a>
            </li>
            <li>
              <a href="">বদভ্যাস</a>
            </li>
            <li>
              <a href="">গড়িমসি</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9 col-12">
      <div class="row">

        <div class="news-div innercat-news">
          <div class="row">
            <div class="col-md-12 col-12">
              <div class="gap-rowtopbottom">
                <h2 class="no-margin">
                  <i class="fa fa-tag" style="color:#9a1515;"></i> {{$tag}}</h2>
              </div>

            </div>
          </div>
          <div class="row">

            @if(!$news->isEmpty()) @foreach($news as $sp_news)
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
                        <a href="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" title="">
                          {{str_limit($sp_news->title, 60, '..')}}
                        </a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endforeach @endif

          </div>
        </div>
        <!--first col12-->
      </div>

      <!--aro button-->
      <div class="text-center gap-rowbottom">
        <div id="more-news">
          <img alt="" src="" class="animation_image" style="width: 30px; display: none;"> {{ $news->links() }}
        </div>
      </div>
      <!--aro button-->
    </div>

  </div>
</div>

@endsection