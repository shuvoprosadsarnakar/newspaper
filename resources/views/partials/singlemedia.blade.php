@if(!$news->isEmpty() and $news->count()>1) 
<div class="col-md-3 col-12 ">

        <div class="">
          <h2 class="title  ">
            <a href=""> {{$category}}</a>
            <span class="double-border"></span>
          </h2>
          <!--news-->

          <div class="singlecategory-portion div-shadow">
            @if(!$news->isEmpty() and $news->count()>0)
            <div class=" boldfont-size ">
              <div class="img-position">
                <a href=" {{route('news',['id'=>$news[0]->id])}} ">
                  <img src="{{URL::asset('storage/'.$news[0]->image)}}" alt="">
                </a>
              </div>
              <div class="news-link reduce-height">
                <h4>
                  <a href="{{route('news',['id'=>$news[0]->id])}}">
                    {{str_limit($news[1]->title, 60, '..')}}
                  </a>
                </h4>
              </div>
            </div>
            @endif 
            @if(!$news->isEmpty() and $news->count()>1) 
            @foreach($news as $sp_news)
            @if ($loop->first) @continue @endif
            <!---->
            <div class="vertical-category">
              <div class="media">
                <div class="media-left">

                  <a href="{{route('news',['id'=>$sp_news->id])}}">
                    <img src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg', $sp_news->image))}}" alt="{{str_limit($sp_news->title, 60, '..')}}"
                      alt="রাঙ্গামাটিতে ৩ যুবককে অপহরণের অভিযোগ">
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
            @endforeach @endif
          </div>

        </div>
        <div class="allnews">
          <a href="" rel=""> All news</a>
        </div>
      </div>
      @endif 