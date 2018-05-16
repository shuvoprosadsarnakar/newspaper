@extends('layouts.master')
@section('content')

  <script>
    (function() {
      var cx = '008773447388232108985:mcmkcjp1hp0';
      var gcse = document.createElement('script');
      gcse.type = 'text/javascript';
      gcse.async = true;
      gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(gcse, s);
    })();
  </script>
  <gcse:search></gcse:search>


@endsection