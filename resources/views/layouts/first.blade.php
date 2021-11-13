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
       <link href="{{ secure_asset('css/home.css') }}" rel="stylesheet">
       <link href="{{ secure_asset('css/introduction.css') }}" rel="stylesheet">
      
  </head>
  <body　style="padding-top: 5rem">
      <div id="app">
        <nav class="navbar navber-expand-md navbar-light bg-dark fixed-top">
          <a class="navbar-brand" href="https://www.michaelvazquez.com/">exprosive workout</a>
          
          <ul class="nav justify-content-center">
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="#">コース紹介</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">イベント</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">コミュニティ</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">ログイン</a>
              </li>
             <li class="nav-item">
               <a class="nav-link" href="#">新規登録</a>
              </li>
          <ul>
        </nav>
        <main class="py-4">
          @yield('content')
        </main>
     
    </div>  
  </body>
</html>