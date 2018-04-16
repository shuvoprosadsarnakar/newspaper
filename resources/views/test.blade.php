@extends('layouts.master')
@section('content')
@if(! empty($news))
<div class="card" style="width: 80%">
    <img class="card-img-top" src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg',$news->image))}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$news->title}}</h5>
      <p class="card-text">{{ $news->news_categories->category_name }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
      {!! html_entity_decode($news->description) !!}

    </div>
  </div>
  
@endif
@endsection
