<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
  <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">


  <!-- Styles -->

</head>

<body>

     <div>
      @foreach ($news as $news_s)
        <p>news title {{ $news_s->title }}</p>
        <p>news body {{ $news_s->description }}</p>
        <p>news category {{ $news_s->news_categories->category_name }}</p>
        <p>news user {{ $news_s->users->name }}</p>
      @endforeach
     </div>
     @foreach($tags as $tag)
    <p>tag = {{$tag->tag}}</p>
     @endforeach

        
  <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>
</body>

</html>