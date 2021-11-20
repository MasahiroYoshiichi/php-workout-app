@extends('layouts.second')

@section('title', '新規投稿')

@section('content')
<div class="bg-secondary">
 <div class="container">
     <div class="row">
         <div class="col-md-6 mt-4">
             <label for="comment" class="form-label"><h4>コメント</h4></label>
             <textarea class="form-control" id="comment" rows="10"></textarea>
         </div>
     </div>
     <div class="row">
         <div class="col-md-12 mt-4">
             <div class="dropdown" aria-labelledby="dropdownMenuButton">
                 <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 ジャンル選択
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">ウエイトトレーニング</a>
                    <a class="dropdown-item" href="#">自重トレーニング</a>
                    <a class="dropdown-item" href="#">体幹トレーニング</a>
                    <a class="dropdown-item" href="#">ストレッチ</a>
                  </div>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="col-md-12 mt-4">
             <div class="dropdown" aria-labelledby="dropdownMenuButton">
                 <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 部位選択
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
     <div class="row">
      <div class="col-md-5 mt-4">
         <h4>投稿画像</h4>
         <button type="button" class="btn btn-light btn-lg mt-3">画像を登録</button>
         <img class="img-fluid mt-3" alt="プロフィール画像" src="https://knsoza1.com/wp-content/uploads/2020/07/70b3dd52350bf605f1bb4078ef79c9b9.png">
      </div>
    </div>
    <div class="row justify-content-end pb-3">
         <button type="submit" class="col-md-2 mt-3 btn btn-light btn-lg">新規投稿</button>
    </div>
 </div> 
 </div>