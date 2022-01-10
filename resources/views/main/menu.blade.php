@extends('layouts.general')
@section('title', 'トレーニングメニュー')
@section('content')

 <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
 <script>
 function dispLoading(msg){
 　    if( msg == undefined ){
 　        msg = "";
 }
 var dispMsg ="<div class='loadingMsg'>"+msg+"</div>";
 if($("#loading").length == 0){
 　 $("body").append("<div id='loading'>" + dispMsg + "</div>");
  }
 }
 
 function removeLoading(){
  $("#loading").remove();
 }

$(function() {
       $('.click').click(function() {
       dispLoading("処理中...");
        var click = $(this).data('id');
        $.ajax({
        type: 'GET',
        url: click,
        dataType: 'html',
      }).done(function (results) {
        $('#movie').html(results);
      }).fail(function (err) {
         alert('ファイルの取得に失敗しました。');
      }).always(function(results) {
         removeLoading();
      });
    }
  );
 });
</script>

<div class="container-fluid bg-light">
    <div class="row training-top">
        <h1>Training List</h1>
    </div>
    <div class="row">
        <div class="col-md-2 text-center">
            <div class="cours-point-title">
                <h5>コース選択</h5>
            </div>
            <div class="course-point">
                <button class="dropdown-item click course-name" data-id="ath">アスリートコース</button>
                <button class="dropdown-item click course-name" data-id="exe">エクササイズコース</button>
                <button class="dropdown-item click course-name" data-id="fit">フィットネスコース</button>
            </div>
             <div class="training-point-title">
                <h5>トレーニング部位選択</h5>
            </div>
            <div class="training-point">
                <button class="dropdown-item click training-name" data-id="chest">胸</button>
                <button class="dropdown-item click training-name" data-id="back">背中</button>
                <button class="dropdown-item click training-name" data-id="sholuder">肩</button>
                <button class="dropdown-item click training-name" data-id="bicelder">上腕二頭筋</button>
                <button class="dropdown-item click training-name" data-id="triceps">上腕三頭筋</button>
                <button class="dropdown-item click training-name" data-id="leg">足</button>
                <button class="dropdown-item click training-name" data-id="hip">お尻</button>
                <button class="dropdown-item click training-name" data-id="body">体幹</button>
            </div>
        </div>
        <div class="col-md-10 training_view">
             <div id="movie">
                 <h1>トレーニングにチャレンジしよう！！</h1>
             </div>
        </div>
    </div>
</div>

@endsection