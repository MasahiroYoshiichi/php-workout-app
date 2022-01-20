<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE-edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      <title>@yield('title')</title>
      
     
      
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">  
      <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
　　　<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
　　　
      
      
      <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ secure_asset('css/layouts.css') }}" rel="stylesheet">
      <link href="{{ secure_asset('css/home.css') }}" rel="stylesheet">
      <link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">

      
  </head>
  <script src="{{ secure_asset('js/app.js') }}" defer></script>
  <body>
      <div id=’app’>
      <header>
        @guest
        <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">
            <a class="navbar-brand" href="/top">Exprosive Workout</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-secondary"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav nav-position">
                   <li class="nav-item active">
                     <a class="nav-link" href="/introduction">コース紹介 <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="/event">イベント</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="/login">ログイン</a>
                   </li>
                    <li class="nav-item">
                     <a class="nav-link" href="/register">新規登録</a>
                   </li>
                <ul>
            </div>
        </nav>
        @endguest
        @auth
         <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">
            <a class="navbar-brand" href="/selection">Exprosive Workout</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-secondary"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav nav-position">
                   <li class="nav-item active">
                     <a class="nav-link" href="/record">レコード<span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="/menu">各種トレーニング</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="/recovery">リカバリー</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="/event">イベント</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="/management">トレーニング管理</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="/information">プロフィール編集</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    </li>     
                 <ul>
            </div>
        </nav>
        @endauth
      </header>
      <main style="padding-top:50px;">
          @yield('content')
      </main>
     
      <footer>
         <hr class="bg-light">
         <div class="container-fluid">
             <div class="row mt-0">
                 <div class="col-md-12 text-center">
                     <h3>Exprosive<br>workout</h3>
                     <br>
                     <p>TEL xxx-xxx-xxx　住所:岡山県岡山市北区xxx-xxx</p>
                     <p>@Copyright 2021 Exprosive Woekuout</p>
                </div>
            </div>
         </div>
      </footer>
    </div>
  </body>
</html>
      
      
      
      