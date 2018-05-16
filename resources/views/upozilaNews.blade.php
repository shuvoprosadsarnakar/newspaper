@extends('layouts.master')
@section('content')

  <!--main news-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">


      <!--news div-->
        @if(isset($news))
        @forelse($news as $newsOne)
          <div class="gap-rowtop">
            <div class="row">
                <div class="col-md-2 ">
                </div>
              <div class="col-md-8 col-12">
                <div class="news-div cat-div allnews-div">
                  <div class="row">
                    <div class="col-md-4 col-4">
                      <div class="img-box">
                        <a href="" title="ছোট কাঁধে বড় দায়িত্ব">
                          <img alt="ছোট কাঁধে বড় দায়িত্ব" src="images/two.jpg">
                        </a>
                        <div class="avobe-category ">
                          <a href="" rel="nofollow">কৃষি ও প্রকৃতি</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 col-8 reduce-padding">
                      <div class="category-name gap-rowright">
                        <h4>
                          <a href="" title="ছোট কাঁধে বড় দায়িত্ব">ছোট কাঁধে বড় দায়িত্ব</a>
                        </h4>
                        <small class="text-muted time-text">০৮:৩৬ এএম, ২৫ মার্চ ২০১৮, রোববার</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        @empty
        <h1>empty</h1>
        @endforelse
        @endif



      <!-- next page-->
      <div class="row">
        <div class="col-md-12">
          <div class="">
            <!--pagnation-->
            <p id="pagination-here"></p>
            {{$news->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  @endsection
