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