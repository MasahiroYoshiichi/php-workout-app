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
<body>
    @yield('content')
</body>