@extends('layouts.general')

@section('title', 'トレーニングメニュー')

@section('content')
 <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

    
    
 <script>
  
   $(function() {
       $('.click').click(function() {
        var click = $(this).data('id');
        $.ajax({
        type: 'GET',
        url: click,
        dataType: 'html',
      }).done(function (results) {
        $('#movie').html(results);
      }).fail(function (err) {
         alert('ファイルの取得に失敗しました。');
     });
    }
  );
 });
</script>
<div class="bg-secondary">
<div class="container bg-light">
    <div class="row">
        <h1>各種トレーニング</h1>
    </div>
    <div class="row menu-selection">
        <div class="col-md-6 text-center">
            <div class="dropdown" style="margin-top: 2rem;">
               <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               トレーニング部位選択
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <button class="dropdown-item click" data-id="chest">胸</button>
                 <button class="dropdown-item click" data-id="back">背中</button>
                 <button class="dropdown-item click" data-id="sholuder">肩</button>
                 <button class="dropdown-item click" data-id="bicelder">上腕二頭筋</button>
                 <button class="dropdown-item click" data-id="triceps">上腕三頭筋</button>
                 <button class="dropdown-item click" data-id="leg">足</button>
                 <button class="dropdown-item click" data-id="hip">お尻</button>
                 <button class="dropdown-item click" data-id="body">体幹</button>
               </div>
           </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="dropdown" style="margin-top: 2rem;">
               <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               コース別選択
               </button>
               <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <button class="dropdown-item click" data-id="ath">アスリートコース</button>
                 <button class="dropdown-item click" data-id="exe">エクササイズコース</button>
                 <button class="dropdown-item click" data-id="fit">フィットネスコース</button>
               </div>
           </div>
        </div>
    </div>
    <div id="movie"></div>
</div>
</div>
@endsection