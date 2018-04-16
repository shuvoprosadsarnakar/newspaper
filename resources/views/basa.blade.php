
@extends('layouts.master')

@section('content')
<div class="first-portion">
    <div class="container">

        <div>
            {{-- @foreach ($news as $news_s)
              <p>news title {{ $news_s->title }}</p>
              <p>news body {{ $news_s->description }}</p>
              <p>news category {{ $news_s->news_categories->category_name }}</p>
              <p>news user {{ $news_s->users->name }}</p>
            @endforeach
           </div>
           @foreach($tags as $tag)
          <p>tag = {{$tag->tag}}</p>
           @endforeach --}}
      <div class="row">
          @if(! empty($news))
        <div class="col-md-8 col-12">
          <!-- image and text over image postion-->
          <div class="inner">
            <div class="news-img">
              <a href="{{route('category',['id'=>$news[0]->id])}}">
                <img src="{{URL::asset('storage/'.$news[0]->image)}}">
              </a>
            </div>
            <div class="news-content">
              <div class="icon-bar ">
                <a href="" class="button-text">
                  {{$news[0]->news_categories->category_name}}
                </a>
              </div>
              <div class="news-link">
                <h3>
                  <a href="{{route('category',['id'=>$news[0]->id])}}" class=" button-text">
                    {{$news[0]->title}}
                  </a>
                </h3>
              </div>
            </div>
          </div>
          <!-- end image and text over image postion-->
        </div>
        @endif

        <div class="col-md-4 col-12">
          <div class="inner">
            <div class="news-img">
              <a href="">
                <img src="http://via.placeholder.com/349x392">
              </a>
            </div>
            <div class="news-content">
              <div class="icon-bar ">
                <a href="" class="button-text">ক্রিকেট</a>
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
      </div>
    </div>
  </div>

  <div class="second-portion">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="news-img">
            <a href="">
              <img src="http://via.placeholder.com/349x200">
            </a>
          </div>
          <div class="icon-bar newsicon-position ">
            <a href="" class="button-text">বিনোদন</a>
          </div>
          <h5>
            <a href="" class="news-text">
              ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
            </a>
          </h5>
          <div class="news-date float-right">
            <p>মার্চ ২২,২o১৮</p>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="news-img">
            <a href="">
              <img src="http://via.placeholder.com/349x200">
            </a>
          </div>
          <div class="icon-bar newsicon-position ">
            <a href="" class="button-text">প্রবাস খবর</a>
          </div>
          <h5>
            <a href="" class="news-text">
              ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
            </a>
          </h5>
          <div class="news-date float-right">
            <p>মার্চ ২২,২o১৮</p>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="news-img">
            <a href="">
              <img src="http://via.placeholder.com/349x200">
            </a>
          </div>
          <div class="icon-bar newsicon-position ">
            <a href="" class="button-text">দেশজুড়ে</a>
          </div>
          <h5>
            <a href="" class="news-text">
              ৩০ বছর পর প্রমাণ হলো তিনি গরু পাচার করেননি গরুপাচার
            </a>
          </h5>
          <div class="news-date float-right">
            <p>মার্চ ২২,২o১৮</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection