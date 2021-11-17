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
  
  <body style="padding-top: 50px">
      <header>
        <nav class="navbar navbar-expand-md navbar-light pl-4 bg-dark fixed-top">
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
      </header>
      
      <main class="py-4">
          @yield('content')
      </main>
      <footer>
      </footer>