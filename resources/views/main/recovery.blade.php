@extends('layouts.general')

@section('title', 'リカバリー')

@section('content')
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

<script>
    $(function() {
        $('#morning').click(function() {
        $.ajax({
        type: 'GET',
        url: 'chest',
        dataType: 'html',
      }).done(function (results) {
        $('#text').html(results);
      }).fail(function (err) {
         alert('ファイルの取得に失敗しました。');
     });
    }
  );
 });
 
 $(function() {
        $('#noon').click(function() {
        $.ajax({
        type: 'GET',
        url: 'morning',
        dataType: 'html',
      }).done(function (results) {
        $('#text').html(results);
      }).fail(function (err) {
         alert('ファイルの取得に失敗しました。');
     });
    }
  );
 });
 
 
</script>
 

<div class="container-fluid bg-secondary" style="height: 100%;">
    <div class="row">
        <div class="col-md-2">
            <div class="dropdown" style="margin-top: 2rem;">
               <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               摂取タイミング一覧
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <input type="button" class="dropdown-item" id="morning" value="朝">
                  <input type="button" class="dropdown-item" id="noon" value="昼">
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
        <div id="text"></div>
    </div>
</div>
@endsection