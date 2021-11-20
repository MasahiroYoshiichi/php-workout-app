<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE-edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      <title>@yield('title')</title>
    
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link herf="https://fonts.googleapis.com/css?family=Releway:300,400,600" rel="stylesheet" type="text/css">
      
      <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ secure_asset('css/layouts.css') }}" rel="stylesheet">
      <link href="{{ secure_asset('css/home.css') }}" rel="stylesheet">
      <link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
       
       <script src="{{ secure_asset('js/app.js') }}" defer></script>
  </head>
  
  <body style="padding-top: 50px">
    <div id=’app’>
      <header>
        <nav class="navbar navbar-expand-md navbar-light pl-4 bg-dark fixed-top">
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
                           <a class="dropdown-item" href="#">ログアウト</a>
                        </div>
                     </div>
                   </li>
                <ul>
            </div>
        </nav>
      </header>
      
      <main class="py-4">
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
      
      