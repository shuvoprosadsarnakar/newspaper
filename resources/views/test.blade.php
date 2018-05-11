@extends('layouts.master')
@section('content')
@if(! empty($news))
<div class="card" style="width: 80%">
    <img class="card-img-top" src="{{URL::asset('storage/'.str_replace('.jpg','-cropped.jpg',$news->image))}}" alt="Card image cap">
    <img class="card-img-top" src="{{URL::asset('storage/'.$news->image)}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$news->title}}</h5>
      <p class="card-text">{{ $news->news_categories->category_name }}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
      {!! html_entity_decode($news->description) !!}

    </div>
    <form action="">
    <input type="text" name="tags" id="tags">
</form>
</div>

@endif
@endsection

@section('js')
    <script>
        var tags = [
            @foreach ($tags as $tag)
                  {tag: "{{$tag}}" },
            @endforeach
        ];

        $(function() {
        $('#tags').selectize({
            delimiter: ',',
            persist: false,
            valueField: 'tag',
            labelField: 'tag',
            searchField: 'tag',
            options: tags,
            create: function(input) {
                return {
                    tag: input
                }
            }
        });
    });
    </script>
@endsection
