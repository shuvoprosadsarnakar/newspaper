<!doctype html>
<html lang="{{ app()->getLocale() }}">
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

        </div>
        <div class="col-md-8 ">
         <h7 id="search">SEARCH HERE</h7> 
          <div class="search-wrapper">
            <div class="input-holder">
                <input type="text" class="search-input" placeholder="Type what you want to search" />
                <button class="search-icon" onclick="searchToggle(this, event);"><span></span></span>
                  <i class="fa fa-search searchbar"></i>
                </button>
            </div>
            <span class="close" onclick="searchToggle(this, event);"></span>
        </div>
        </div>
      </div>
      </div>
      </div>
     <dv class="second-header">

     </dv>

         

        <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    </body>

</html>


