@extends('layouts.general')

@section('title', 'トレーニング管理')

@section('content')
<div class="container-fluid bg-secondary" style="height: 100%">
    <div class="row">
        <div class="col mt-3 text-center d-block d-md-none"><h3>部位別トレーニング回数</h3></div>
    </div>
    <div class="row">
        <div class="col mt-3 d-none d-md-block"><h3>部位別トレーニング回数</h3></div>
    </div>
    <div class="row">
        <div class="col-md-2 d-block d-md-none dropdown text-center" aria-labelledby="dropdownMenuButton">
                <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 部位選択
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">胸</a>
                    <a class="dropdown-item" href="#">上腕二頭筋</a>
                    <a class="dropdown-item" href="#">上腕三頭筋</a>
                    <a class="dropdown-item" href="#">肩</a>
                    <a class="dropdown-item" href="#">足</a>
                    <a class="dropdown-item" href="#">体幹</a>
                 </div>
            
        </div>
        <div class="col-md-2 d-none d-md-block btn-group-vertical mt-2" role="group" aria-label="bodyType">
            <button type="button" class="btn btn-light">胸</button>
            <button type="button" class="btn btn-light mt-1">上腕二頭筋</button>
            <button type="button" class="btn btn-light mt-1">上腕三頭筋</button>
            <button type="button" class="btn btn-light mt-1">肩</button>
            <button type="button" class="btn btn-light mt-1">足</button>
            <button type="button" class="btn btn-light mt-1">体幹</button>
        </div>
        <div class="col-md-5 text-center align-self-center"><h2>※総数などを入力予定</h2></div>
        <div class="col-md-5 text-center align-self-center"><h2>円グラフ作成予定</h2></div>
    </div>
    <div class="row">
        <div class="col mt-3" style="height: 10rem;"><h3>体重管理</h3></div>
        <div class="col-md-12 text-center align-self-center"><h2>折れ線グラフ作成予定</h2></div>
    </div>
</div>
@endsection