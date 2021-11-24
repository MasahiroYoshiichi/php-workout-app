@extends('layouts.general')

@section('title', 'トレーニングメニュー')

@section('content')
<div class="container-fluid bg-secondary" style="height: 100%;">
    <div class="row">
        <div class="col-md-2 mb-2 text-center d-block d-md-none">
            <div class="dropdown" style="margin-top: 2rem;">
               <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               トレーニング部位
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">上半身</a>
                  <a class="dropdown-item" href="#">下半身</a>
                  <a class="dropdown-item" href="#">体幹</a>
                  <a class="dropdown-item" href="#">ストレッチ</a>
             </div>
           </div>
        </div>
        <div class="col-md-2 d-none d-md-block">
            <div class="dropdown" style="margin-top: 2rem;">
               <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               トレーニング部位
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">上半身</a>
                  <a class="dropdown-item" href="#">下半身</a>
                  <a class="dropdown-item" href="#">体幹</a>
                  <a class="dropdown-item" href="#">ストレッチ</a>
             </div>
           </div>
        </div>
    </div>
    <div class="row offset-2">
        <div class="col-md-5 mb-4">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2017/02/09/16/21/kettlebell-2052765_1280.jpg">
        </div>
        <div class="col-md-5 mb-4">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2018/06/27/22/45/fitness-3502830_1280.jpg">
        </div>
        <div class="col-md-5 mb-4">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2017/08/26/08/48/street-workout-2682499_1280.jpg">
        </div>
        <div class="col-md-5 mb-4">
            <img class="img-fluid" src="https://cdn.pixabay.com/photo/2017/04/22/10/15/woman-2250970_1280.jpg">
        </div>
    </div>
</div>
@endsection
