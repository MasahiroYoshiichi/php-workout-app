<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE-edge">
      <meta name="viewport" content="width=device-width,nitial-scale=1">
      
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      <title>@yield('title')</title>
      
      
     <script src="{{ secure_asset('js/app.js') }}" defer></script>
      
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link herf="https://fonts.googleapis.com/css?family=Releway:300,400,600" rel="stylesheet" type="text/css">
      
      
      <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
       <link href="{{ secure_asset('css/top.css') }}" rel="stylesheet">
       <link href="{{ secure_asset('css/form.css') }}" rel="stylesheet">
       <link href="{{ secure_asset('css/introduction.css') }}" rel="stylesheet">
       <link href="{{ secure_asset('css/layouts.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/event.css') }}" rel="stylesheet">
  </head>
  
  <body>
      <main class="py-4">
          @yield('content')
      </main>
  </body>
  
  </html>
  