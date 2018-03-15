<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">


  <!-- Styles -->

</head>

<body>
  <div class="first-header">
    <div class="container-fluid">
      <div class="row">
        <div class=col-md-4>
          <img src="{{URL::asset('images/bglogo.png')}}" height=65px style="padding-left:20px">
          <div class="location-time">
            <p>
              <img src="{{URL::asset('images/location.png')}}" height=17px> Dhaka, Wednesday, 14th March 2018, Summer</p>
          </div>
        </div>

        <div class="col-md-8 ">
          <div class="search-text">
            <h7 id="search">SEARCH HERE</h7>
          </div>
          <div class="search-wrapper">
            <div class="input-holder">
              <input type="text" class="search-input" placeholder="Type what you want to search" />
              <button class="search-icon" onclick="searchToggle(this, event);">
                <span></span>
                </span>
                <i class="fa fa-search searchbar"></i>
              </button>
            </div>
            <span class="close" onclick="searchToggle(this, event);"></span>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  <div class="second-header">

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">
          <i class="fas fa-home"></i>
        </a>

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Bangladesh
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">National</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">international</a>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Economics</a>
                <ul class="dropdown-menu">
                  <a class="dropdown-item" href="#">A</a>
                  <a class="dropdown-item" href="#">b</a>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Deshjure
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              International
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">World</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Abroad</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Abroad</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Sports
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Cricket</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Football</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Others</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Entertainment
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Hollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Bollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Tollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Dhalywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Small Tv</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Education and Training
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Sikhha o sahitho</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Campus News</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Higher education</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Fitcher
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">Jibonsoili</a>
                <ul class="dropdown-menu">
                  <a class="dropdown-item" href="#">Rasifol</a>
                </ul>
              </li>
              <li>
                <a class="dropdown-item" href="#">Health</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Science and It</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Travel</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Religion and Life</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">krisi and life</a>
              </li>
            </ul>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Vedio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Job
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">E-paper
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              All categori
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Hollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Bollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Tollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Dhalywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Small Tv</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Hollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Bollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Tollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Dhalywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Small Tv</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Hollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Bollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Tollywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Dhalywood</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Small Tv</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>



  <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>

</html>