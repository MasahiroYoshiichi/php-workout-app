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
            <a class="navbar-brand" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/top">Exprosive Workout</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-secondary"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav nav-position">
                   <li class="nav-item active">
                     <a class="nav-link" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/introduction">コース紹介 <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/event">イベント</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/community">コミュニティ</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/login">ログイン</a>
                   </li>
                    <li class="nav-item">
                     <a class="nav-link" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/register">新規登録</a>
                   </li>
                <ul>
            </div>
        </nav>
        @endguest
        @auth
         <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top">
            <a class="navbar-brand" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/selection">Exprosive Workout</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-secondary"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav nav-position">
                   <li class="nav-item active">
                     <a class="nav-link" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/record">レコード<span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/menu#">各種トレーニング</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/recovery">リカバリー</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/event">イベント</a>
                    </li>
                   <li class="nav-item">
                     <a class="nav-link" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/community">コミュニティー</a>
                    </li>
                   <li class="nav-item">
                     <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           各種設定
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/information">プロフィール編集</a>
                           <a class="dropdown-item" href="https://38a82c3a634c4395a4d13f060d111e4e.vfs.cloud9.us-east-2.amazonaws.com/management">トレーニング管理</a>
                           <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            ログアウト
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                           </form>
                        </div>
                     </div>
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
      
      
      
      