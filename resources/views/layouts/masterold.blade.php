<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}"/>
    <!-- Bootstrap and other CSS style sheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">

    {{-- <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet"> --}}
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-9928854251233601",
        enable_page_level_ads: true
      });
    </script>
    <title>The Bangladesh Today - সত্যের সাথে সব সময়</title>
</head>

<body>
    <!--slider header menu -->
    <div id="menu">
    <div class="site-info menu-border ">
      <img src="{{ URL::asset('images/bglogo2.png') }}">
    </div>
    <div class="menu-border secondmenu">
      {{-- <div class="menu-top post ">
        <a href="{{ route('login') }}" class="button logreg-button reg-color"> লগইন</a>
        <a href="{{ route('register') }}" class="button logreg-button reg-color"> রেজিস্টার</a>
   
      </div> --}}

    </div>
    <div class="mobile_menu_search">
        @include('layouts.m_searchinput')
    </div>
    <!-- -->
    <div class="vertical-submenu">
      <ul class="vertical-submenulist">
        <li class="menu-item ">
          <a href=""> বাংলাদেশ</a>
          <div class="dropdown">
            <button type="button" class=" custom-toggle dropdown-toggle" data-toggle="dropdown">

            </button>
            <div class="dropdown-menu custom-dropdownmenu">
              <a class="dropdown-item" href="">জাতীয়</a>
              <a class="dropdown-item " href="">রাজনীতি</a>
              <a class="dropdown-item " href="">অর্থ ও বাণিজ্য</a>
            </div>
          </div>
        </li>
        <li class="menu-item ">
          <a href="">দেশজুড়ে</a>

        </li>
        <li class="menu-item ">
          <a href=""> আন্তর্জাতিক</a>
          <div class="dropdown">
            <button type="button" class=" custom-toggle dropdown-toggle" data-toggle="dropdown">

            </button>
            <div class="dropdown-menu custom-dropdownmenu">
              <a class="dropdown-item" href="">সারাবিশ্ব</a>
              <a class="dropdown-item " href="">বিস্ময়কর পৃথিবী</a>
              <a class="dropdown-item " href="">প্রবাস খবর</a>
            </div>
          </div>
        </li>
        <li class="menu-item ">
          <a href=""> খেলাধুলা</a>
          <div class="dropdown">
            <button type="button" class=" custom-toggle dropdown-toggle" data-toggle="dropdown">

            </button>
            <div class="dropdown-menu custom-dropdownmenu">
              <a class="dropdown-item" href=""> ক্রিকেট</a>
              <a class="dropdown-item " href="">ফুটবল</a>
              <a class="dropdown-item " href="">অন্যান্য</a>
            </div>

          </div>
        </li>
        <li class="menu-item ">
          <a href=""> বিনোদন</a>
          <div class="dropdown">
            <button type="button" class=" custom-toggle dropdown-toggle" data-toggle="dropdown">

            </button>
            <div class="dropdown-menu custom-dropdownmenu">
              <a class="dropdown-item" href="">হলিউড</a>
              <a class="dropdown-item " href="">বলিউড</a>
              <a class="dropdown-item " href="">ঢালিউড</a>
              <a class="dropdown-item " href="">টলিউড</a>
              <a class="dropdown-item " href="">ছোট পর্দা</a>
            </div>
          </div>
        </li>
        <li class="menu-item ">
          <a href=""> শিক্ষাঙ্গন</a>
          <div class="dropdown">
            <button type="button" class=" custom-toggle dropdown-toggle" data-toggle="dropdown">

            </button>
            <div class="dropdown-menu custom-dropdownmenu">
              <a class="dropdown-item" href="">শিক্ষা ও সাহিত্য</a>
              <a class="dropdown-item " href="">ক্যাম্পাস নিউজ</a>
              <a class="dropdown-item " href="">উচ্চশিক্ষা</a>
              <a class="dropdown-item " href="">ফলাফল</a>
            </div>
          </div>
        </li>
        <li class="menu-item ">
          <a href=""> ফিচার</a>
          <div class="dropdown">
            <button type="button" class=" custom-toggle dropdown-toggle" data-toggle="dropdown">
            </button>
            
            <div class="dropdown-menu custom-dropdownmenu">
                <a class="dropdown-item" href="">জীবনশৈলী</a>
                <a class="dropdown-item " href=""> রাশিফল</a>
                <a class="dropdown-item " href=""> স্বাস্থ্যকথা</a>
                <a class="dropdown-item " href=""> ভ্রমণ</a>
                <a class="dropdown-item " href=""> ধর্ম ও জীবন</a>
                <a class="dropdown-item " href="">কৃষি ও জীবন</a>
              </div>

            </div>
         
        </li>

        <li class="menu-item ">
          <a href="">ফটো গ্যালারি</a>

        </li>
        <li class="menu-item ">
          <a href="">ভিডিও</a>

        </li>
        <li class="menu-item ">
          <a href="">চাকরি</a>

        </li>
        <li class="menu-item ">
          <a href="">ই-পেপার</a>

        </li>
       
      </ul>
    </div>
   <div class="post">
    <ul class="social-icon">
      <li>
        <a href="https://www.facebook.com/TheBangladeshToday">
          <span class="icon-border">
            <i class="fab fa-facebook-f icon-color"></i>
          </span>
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/channel/UCG2M5F-McoWp837K5iMQzQg">
          <span class="icon-border">
            <i class="fab fa-youtube icon-color"></i>
          </span>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/tbt_newspaper">
          <span class="icon-border">
            <i class="fab fa-twitter icon-color"></i>
          </span>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/tbt_it/">
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
   
 
    <!-- -->
  </div>
<!-- slider header end-->

    
<div id="panel">
<!-- visual header-->
<div class="mobile-header">
      <div class="first-header header-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-1 col-2 ">



              <button class="toggle-button">
                <i class="fas fa-bars"></i>
              </button>



            </div>
            <div class="col-8 col-md-11 mblogo">
              <img src="{{ URL::asset('images/bglogo2.png') }}">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile header end-->
    <div class="header">
      <div class="first-header header-bottom ">
        <div class="container">
          <div class="row">

            <div class="col-md-3">

              <ul class="social-icon">
                <li>
                  <a href="https://www.facebook.com/TheBangladeshToday">
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
            <div class="col-md-5  logo-img">
              <img src="{{ URL::asset('images/bglogo2.png') }}">
            </div>

            {{-- <div class="col-md-3 ">
              <div class="log-reg float-right">
                <a href="{{ route('login') }}" class="logreg-button log-color">
                  লগইন
                </a>
                <a href="{{ route('register') }}" class="logreg-button reg-color">
                  রেজিস্টার
                </a>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
      <!-- start menu dropdwn-->
      <div class="second-header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-full navbar-custom ">
            <a class="navbar-brand" href="#"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">

              <a class="navbar-brand" href="{{route('home')}}">
                <i class="fas fa-home button-text"></i>
              </a>
              <!--<a class="navbar-brand" href="#"></a>
                  <a class="navbar-brand" href="#"></a>
                  <a class="navbar-brand" href="#"></a>-->
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item dropdown custom-dropdown ">
                  <a class="nav-link dropdown-toggle ddown" href="http://www.facebook.com" id="navbarDropdownMenuLink" aria-haspopup="true"
                    aria-expanded="false">
                    বাংলাদেশ
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="#">জাতীয়</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">রাজনীতি</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">অর্থ ও বাণিজ্য</a>
                    </li>

                  </ul>
                </li>
                <li class="nav-item dropdown custom-dropdown ">
                  <a class="nav-link  ddown" href="#"> দেশজুড়ে</a>
                </li>
                <li class="nav-item dropdown custom-dropdown">
                  <a class="nav-link dropdown-toggle  ddown" href="http://example.com" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                    আন্তর্জাতিক
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="#">সারাবিশ্ব</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> বিস্ময়কর পৃথিবী</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">প্রবাস খবর</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown custom-dropdown">
                  <a class="nav-link dropdown-toggle  ddown" href="http://example.com" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                    খেলাধুলা
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="#"> ক্রিকেট</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> ফুটবল</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> অন্যান্য</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown custom-dropdown">
                  <a class="nav-link dropdown-toggle  ddown" href="http://example.com" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                    বিনোদন
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="#">হলিউড</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> বলিউড</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">ঢালিউড</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> টলিউড</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> ছোট পর্দা</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown custom-dropdown custom-dropdown ">
                  <a class="nav-link dropdown-toggle  ddown" href="http://example.com" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                    শিক্ষাঙ্গন
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                      <a class="dropdown-item" href="#"> শিক্ষা ও সাহিত্য</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> ক্যাম্পাস নিউজ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">উচ্চশিক্ষা</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> ফলাফল</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown custom-dropdown">
                  <a class="nav-link dropdown-toggle  ddown" href="http://example.com" id="navbarDropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                    ফিচার
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle" href="#"> জীবনশৈলী</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a class="dropdown-item rashi" href="#"> রাশিফল</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> স্বাস্থ্যকথা</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> ভ্রমণ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> ধর্ম ও জীবন</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> কৃষি ও জীবন</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown custom-dropdown">
                  <a class="nav-link  ddown" href="#">ফটো গ্যালারি</a>
                </li>
                <li class="nav-item dropdown custom-dropdown">
                  <a class="nav-link  ddown" href="#">ভিডিও</a>
                </li>
                <li class="nav-item dropdown custom-dropdown">
                  <a class="nav-link  ddown" href="#">চাকরি</a>
                </li>
                <li class="nav-item dropdown custom-dropdown">
                  <a class="nav-link  ddown" href="#"> ই-পেপার</a>
                </li>
              </ul>

            </div>
          </nav>
          <!--end dropdown nav-->

        </div>
      </div>
      </div>
      <!-- start 3rd header-->
     
      
<!--end header -->
    
    
    @yield('content')

   
<!-- st footer-->
<div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">
            <div class="clickable-news">
              <div class="news-img float-left">

                <i class="fas fa-envelope-open"></i>
              </div>
              <div>
                <h4 class="meta-link email-text">
                  STAY INFORMED - SUBSCRIBE TO OUR NEWSLETTER
                </h4>

              </div>
            </div>


          </div>
          <div class="col-md-5 col-12">
            <form class="clickable-news" action="">
              <input type="text" placeholder="" name="subscribe" class="subscribe-text">
              <button type="submit" value="" class="button-text subscribe-text">Subscribe</button>
            </form>
          </div>

          <div class="col-md-3 col-12">
            <ul class="social-icon">
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
        <hr>
        <div class="row">
          <div class="col-md-3 col-6">
            <div class="footer-nav">
              <h2 class="">International</h2>
              <ul class="vertical-menu">
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>

              </ul>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="footer-nav">
              <h2 class="">International</h2>
              <ul class="vertical-menu">
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>

              </ul>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="footer-nav">
              <h2 class="">International</h2>
              <ul class="vertical-menu">
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>

              </ul>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="footer-nav">
              <h2 class="">International</h2>
              <ul class="vertical-menu">
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>
                <li>
                  <a href="">asia pacific</a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-12">

          </div>
          <div class="col-md-4 col-12">
            <img src="{{ URL::asset('images/bglogo2.png')}}">
          </div>
          <div class="col-md-4 col-12">
              <p class="credit">Powered by <a href="http://10on10tech.com" target="_blank">10 on 10 Tech Zone</a></p>
          </div>
        </div>

      </div>
      
    </div>
   
<!-- end footer-->
</div>
<!-- end panel div-->
    <!-- back to top -->
    <span class="backto-top">
        <i class="fas fa-arrow-up"></i>
    </span>

    <!-- js libraries  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/slideout.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- sub category script-->
    

@yield('js')

</body>

</html>