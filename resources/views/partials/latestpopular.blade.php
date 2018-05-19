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