<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE-edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      <title>@yield('title')</title>
      
     
      
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">  
      
      
      <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ secure_asset('css/layouts.css') }}" rel="stylesheet">
      <link href="{{ secure_asset('css/home.css') }}" rel="stylesheet">
      <link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">

      
  </head>
  <script src="{{ secure_asset('js/app.js') }}" defer></script>
  <body>

@foreach($movie as $e)
   <div class="col-md-5 ml-5">
    <label class="training_label">{{$e->training_name}}</label>
    <iframe width="100%" height="300" src="{{$e->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
@endforeach

</body>