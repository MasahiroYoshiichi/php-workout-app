@extends('layouts.second')

@section('title', 'リカバリー')

@section('content')
<div class="container-fluid bg-secondary" style="height: 100%;">
    <div class="row">
        <div class="col-md-2">
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