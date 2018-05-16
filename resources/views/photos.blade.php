@extends('layouts.master')
@section('content')

  <!-- start 3rd header-->

  <div class="innerpage-header ">
        <div class="first-category sub-category">
          <div class="container">
            <div class="row ">
              <div class="col-md-12 col-12">
    
                <a href="">
                  <div class="category-name">
                    <h3>Photo gallery</h3>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
    
        <div class="sub-category ">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-12">
                <div class="category-submenu">
                  <span class="menu-dropdown">
                    <i class="fas fa-angle-down"></i>
                  </span>
                  <div class="menu-warp" style="display:none;">
                    <div id="secondary-menu" class="secondary-menu">
                      <ul class="">
                        <li>
                          <a href="" class="text-color"></a>
                        </li>
                       
                      </ul>
                    </div>
                  </div>
    
                </div>
    
                <!-- end for mobile sub category-->
                <div class="topic">
    
                  <ul class="menu">
                    <li>
                      <a href="" class="text-color"></a>
                    </li>
                    
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
      <div class="category-name gap-rowbottom">
        <div class="container">
          <div class="row sublist-category">
            <div class="col-md-12 col-12">
              <ul>
                <li>
                  <a href="" class="i-color">
                    <i class="fas fa-home"></i>
                  </a>
                </li>
                <li>
                  <span>
                    <i class="fas fa-angle-right"></i>
                  </span>
                  <a href="" class="text-muted">
                    <strong>Photo gallery</strong>
                  </a>
                </li>
    
              </ul>
            </div>
    
    
    
    
          </div>
    
        </div>
    
    
      </div>
      <!--main -->
    
      <div class="">
        <div class="container">
          <div class="">
    
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
                        <a href="#content9">সর্বশেষ</a>
                      </li>
                      <li class="multitab-tab one">
                        <a href="#content10">জনপ্রিয়</a>
                      </li>
                    </ul>
                  </div>
                  <div class="clear"></div>
    
                  <!-- Tab panes -->
                  <div class="tab-content" id="content9">
                    <div class=" photo-galary">
    
                      <ul class="media-list">
                        <li class="media">
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
                        </li>
                        <li class="media">
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
                        </li>
                        <li class="media">
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
                        </li>
                        <li class="media">
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
                        </li>
                        <li class="media">
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
                        </li>
                        <li class="media">
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
                        </li>
                        <li class="media">
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
                        </li>
                        <li class="media">
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
                        </li>
    
                      </ul>
    
                    </div>
                  </div>
                  <div class="tab-content" id="content10">
                    <div class=" photo-galary">
    
                      <ul class="media-list">
                        <li class="media">
                          <div class="media-left">
    
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
    
                    </div>
                  </div>
    
                </div>
    
                <!--end-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--banglades photo-->
      <div class="singlecategory-portion">
        <div class="gap-rowtop">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href="">বাংলাদেশ</a>
                  <span class="double-border"></span>
                </h2>
    
              </div>
    
            </div>
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
            <!--for 2nd row-->
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <!--end bangladesh  st deshjure photo-->
        <div class="gap-rowtop">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href="">দেশজুড়ে</a>
                  <span class="double-border"></span>
                </h2>
    
              </div>
    
            </div>
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
            <!--for 2nd row-->
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <!--end desh start antojatik-->
        <div class="gap-rowtop">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href="">আন্তর্জাতিক</a>
                  <span class="double-border"></span>
                </h2>
    
              </div>
    
            </div>
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
            <!--for 2nd row-->
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <!--end anto st binodon-->
        <div class="gap-rowtop">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href=""> বিনোদন</a>
                  <span class="double-border"></span>
                </h2>
    
              </div>
    
            </div>
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
            <!--for 2nd row-->
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <!--end binodon st kheladhula-->
        <div class="gap-rowtop">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href=""> খেলাধুলা</a>
                  <span class="double-border"></span>
                </h2>
    
              </div>
    
            </div>
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
            <!--for 2nd row-->
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <!--end binodon start fashion-->
        <div class="gap-rowtop">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href=""> ফ্যাশন</a>
                  <span class="double-border"></span>
                </h2>
    
              </div>
    
            </div>
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
            <!--for 2nd row-->
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <!--end fashion st bisoykor pritivi-->
        <div class="gap-rowtop">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href=""> বিস্ময়কর পৃথিবী</a>
                  <span class="double-border"></span>
                </h2>
    
              </div>
    
            </div>
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
            <!--for 2nd row-->
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <!-- end bisoykor pritivi start sashokotha-->
        <div class="gap-rowtop">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href=""> স্বাস্থ্যকথা</a>
                  <span class="double-border"></span>
                </h2>
    
              </div>
    
            </div>
            <div class="row ">
              <div class="col-md-3 c ol-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
            <!--for 2nd row-->
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <!--end sastho kotha start vromon-->
        <div class="gap-rowtop">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-12">
                <h2 class="title">
                  <a href="">ভ্রমণ</a>
                  <span class="double-border"></span>
                </h2>
    
              </div>
    
            </div>
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
            <!--for 2nd row-->
            <div class="row ">
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/five.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-12">
                <div class=" photo-divheight  ">
                  <div class="img-position">
                    <a href="">
                      <img src="images/two.jpg" alt="">
                    </a>
                  </div>
                  <div class="news-link">
                    <h4>
                      <a href="">বেপরোয়া গাড়ি ধরতে ডিএমপির </a>
                    </h4>
                  </div>
                  <a href="">
                    <i class="fas fa-camera photovedio-icon small-photo"></i>
                  </a>
                </div>
              </div>
    
            </div>
          </div>
        </div>
        <!--end vromon-->
      </div>
    

@endsection