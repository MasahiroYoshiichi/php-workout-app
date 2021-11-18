@extends('layouts.second')

@section('title', '新規投稿')

@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-6 mt-4">
             <label for="comment" class="form-label"><h4>コメント</h4></label>
             <textarea class="form-control" id="comment" rows="10"></textarea>
         </div>
     </div>
     <div class="row">
         <div class="col-md-12 mt-4">
             <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 ジャンル選択
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
 </div> 