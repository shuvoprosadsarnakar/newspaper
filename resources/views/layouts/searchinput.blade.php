<form method="get" action="{{route('searchresult')}}">
    {{ csrf_field() }}
    <div class="search-bar">
      <input type="search" id="search" placeholder="Search..." name="q"/>
      <button type="submit">
        <span class="icon">
          <i class="fa fa-search"></i>
        </span>
      </button>
    </div>
  </form>