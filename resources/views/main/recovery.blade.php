@extends('layouts.general')

@section('title', 'リカバリー')

@section('content')
<div class="container-fluid bg-secondary" style="height: 100%;">
    <div class="row">
        <div class="col-md-2">
            <div class="dropdown" style="margin-top: 2rem;">
               <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               摂取タイミング一覧
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">朝</a>
                  <a class="dropdown-item" href="#">昼</a>
                  <a class="dropdown-item" href="#">夜</a>
                  <a class="dropdown-item" href="#">就寝前</a>
                  <a class="dropdown-item" href="#">トレーニング前</a>
                  <a class="dropdown-item" href="#">トレーニング中</a>
                  <a class="dropdown-item" href="#">トレーニング後</a>
             </div>
           </div>
           <div class="dropdown" style="margin-top: 15rem;">
               <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               栄養素一覧 
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">BCAA</a>
                  <a class="dropdown-item" href="#">EAA</a>
                  <a class="dropdown-item" href="#">HMB</a>
                  <a class="dropdown-item" href="#">プロテイン</a>
                  <a class="dropdown-item" href="#">クレアチン</a>
                  <a class="dropdown-item" href="#">グルタミン</a>
                  <a class="dropdown-item" href="#">アルギニン</a>
                  <a class="dropdown-item" href="#">シトルリン</a>
                  <a class="dropdown-item" href="#">カルニチン</a>
                  <a class="dropdown-item" href="#">ビタミンB</a>
                  <a class="dropdown-item" href="#">ビタミンD</a>
                  <a class="dropdown-item" href="#">亜鉛</a>
                  <a class="dropdown-item" href="#">マグネシウム</a>
             </div>
           </div>
        </div>
        <div class="col-md-10 text-center align-self-end">
            <h4>詳細が表示されます。</h4>
        </div>
    </div>
</div>
@endsection