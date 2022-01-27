@extends('layouts.general')

@section('title', 'リカバリー')

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
          $('#text').html(results);
        }).fail(function (err) {
           alert('ファイルの取得に失敗しました。');
       });
      }
    );
   });
</script>
 

<div class="container-fluid bg-secondary">
    <div class="row recovery-top">
        <h1>Body Maintenance</h1>
    </div>
    <div class="row recovery-pru justify-content-center text-center">
        <div class="dropdown">
           <button class="btn btn-light btn-lg recovery_botton dropdown-toggle d-none d-md-block" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           筋力アップ
           </button>
           <button class="btn btn-light recovery_botton_sm dropdown-toggle d-block d-md-none" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           筋力アップ
           </button>
           <div class="dropdown-menu" style="margin-top: 12rem;" aria-labelledby="dropdownMenuButton">
             <button class="dropdown-item click" data-id="whey">ホエイプロテイン</button>
             <button class="dropdown-item click" data-id="bcaa">BCAA</button>
             <button class="dropdown-item click" data-id="eaa">EAA</button>
             <button class="dropdown-item click" data-id="hmb">HMB</button>
             <button class="dropdown-item click" data-id="carbohydrates">炭水化物</button>
             <button class="dropdown-item click" data-id="creatine">クレアチン</button>
             <button class="dropdown-item click" data-id="glutamine">グルタミン</button>
             <button class="dropdown-item click" data-id="arginine">アルギニン</button>
             <button class="dropdown-item click" data-id="citrulline">シトルリン</button>
             <button class="dropdown-item click" data-id="zinc">亜鉛</button>
             <button class="dropdown-item click" data-id="kuromu">クロム</button>
             <button class="dropdown-item click" data-id="mangan">マンガン</button>
             <button class="dropdown-item click" data-id="vitaminB6">ビタミンB6</button>
             <button class="dropdown-item click" data-id="vitaminB12">ビタミンB12</button>
           </div>
        </div>
        <div class="dropdown">
           <button class="btn btn-light btn-lg recovery_botton dropdown-toggle d-none d-md-block" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           ダイエット＆美容
           </button>
           <button class="btn btn-light recovery_botton_sm dropdown-toggle d-block d-md-none" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           ダイエット＆美容
           </button>
           <div class="dropdown-menu overflow-auto" style="height:460px; margin-top: 12rem;"aria-labelledby="dropdownMenuButton">
             <button class="dropdown-item click" data-id="gazein">ガゼインプロテイン</button>
             <button class="dropdown-item click" data-id="carnitine">L-カルニチン</button>
             <button class="dropdown-item click" data-id="cla">共役リノール酸</button>
             <button class="dropdown-item click" data-id="probiotics">プロバイオティクス</button>
             <button class="dropdown-item click" data-id="youso">ヨウ素</button>
             <button class="dropdown-item click" data-id="magnesium">マグネシウム</button>
             <button class="dropdown-item click" data-id="biotin">ビオチン</button>
             <button class="dropdown-item click" data-id="pantothenic">パントテン酸</button>
             <button class="dropdown-item click" data-id="caroten">β-カロテン</button>
             <button class="dropdown-item click" data-id="vitaminA">ビタミンA</button>
             <button class="dropdown-item click" data-id="vitaminB1">ビタミンB1</button>
             <button class="dropdown-item click" data-id="vitaminC">ビタミンC</button>
             <button class="dropdown-item click" data-id="vitaminE">ビタミンE</button>
             <button class="dropdown-item click" data-id="lipo">α-リポ酸</button>
             <button class="dropdown-item click" data-id="lycopene">リコピン</button>
             <button class="dropdown-item click" data-id="carnitine">L-カルニチン</button>
             <button class="dropdown-item click" data-id="citrulline">シトルリン</button>
            </div>
        </div>
        <div class="dropdown">
           <button class="btn btn-light btn-lg recovery_botton dropdown-toggle d-none d-md-block" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           パフォーマンス向上
           </button>
           <button class="btn btn-light  recovery_botton_sm dropdown-toggle d-block d-md-none" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           パフォーマンス向上
           </button>
           <div class="dropdown-menu overflow-auto" style="height:460px; margin-top: 12rem;" aria-labelledby="dropdownMenuButton">
             <button class="dropdown-item click" data-id="bcaa">BCAA</button>
             <button class="dropdown-item click" data-id="eaa">EAA</button>
             <button class="dropdown-item click" data-id="hmb">HMB</button>
             <button class="dropdown-item click" data-id="carbohydrates">炭水化物</button>
             <button class="dropdown-item click" data-id="citric">クエン酸</button>
             <button class="dropdown-item click" data-id="sodium">重炭酸ナトリウム</button>
             <button class="dropdown-item click" data-id="zinc">亜鉛</button>
             <button class="dropdown-item click" data-id="mangan">マンガン</button>
             <button class="dropdown-item click" data-id="youso">ヨウ素</button>
             <button class="dropdown-item click" data-id="copper">銅</button>
             <button class="dropdown-item click" data-id="iron">鉄分</button>
             <button class="dropdown-item click" data-id="potassium">カリウム</button>
             <button class="dropdown-item click" data-id="magnesium">マグネシウム</button>
             <button class="dropdown-item click" data-id="line">リン</button>
             <button class="dropdown-item click" data-id="calcium">カルシウム</button>
             <button class="dropdown-item click" data-id="folic">葉酸</button>
             <button class="dropdown-item click" data-id="niacin">ナイアシン</button>
             <button class="dropdown-item click" data-id="vitaminB1">ビタミンB1</button>
             <button class="dropdown-item click" data-id="vitaminB6">ビタミンB6</button>
             <button class="dropdown-item click" data-id="vitaminB12">ビタミンB12</button>
             <button class="dropdown-item click" data-id="vitaminD">ビタミンD</button>
             <button class="dropdown-item click" data-id="vitaminK">ビタミンK</button>
             <button class="dropdown-item click" data-id="lipo">α-リポ酸</button>
             <button class="dropdown-item click" data-id="tyrosine">L-チロシン</button>
             <button class="dropdown-item click" data-id="alanine">β-アラニン</button>
             <button class="dropdown-item click" data-id="ornithine">オルニチン</button>
           </div>
        </div>
        <div class="dropdown">
           <button class="btn btn-light btn-lg recovery_botton dropdown-toggle d-none d-md-block" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           健康維持
           </button>
           <button class="btn btn-light recovery_botton_sm dropdown-toggle d-block d-md-none" type="button" id="team_id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           健康維持
           </button>
           <div class="dropdown-menu overflow-auto" style="height:460px; margin-top: 12rem;" aria-labelledby="dropdownMenuButton">
             <button class="dropdown-item click" data-id="soy">ソイプロテイン</button>
             <button class="dropdown-item click" data-id="arginine">アルギニン</button>
             <button class="dropdown-item click" data-id="citrulline">シトルリン</button>
             <button class="dropdown-item click" data-id="ornithine">オルニチン</button>
             <button class="dropdown-item click" data-id="omega">オメガ3</button>
             <button class="dropdown-item click" data-id="dha">DHA</button>
             <button class="dropdown-item click" data-id="epa">EPA</button>
             <button class="dropdown-item click" data-id="probiotics">プロバイオティクス</button>
             <button class="dropdown-item click" data-id="citric">クエン酸</button>
             <button class="dropdown-item click" data-id="sodium">重炭酸ナトリウム</button>
             <button class="dropdown-item click" data-id="zinc">亜鉛</button>
             <button class="dropdown-item click" data-id="moribuden">モリブデン</button>
             <button class="dropdown-item click" data-id="kuromu">クロム</button>
             <button class="dropdown-item click" data-id="seren">セレン</button>
             <button class="dropdown-item click" data-id="mangan">マンガン</button>
             <button class="dropdown-item click" data-id="copper">銅</button>
             <button class="dropdown-item click" data-id="iron">鉄分</button>
             <button class="dropdown-item click" data-id="potassium">カリウム</button>
             <button class="dropdown-item click" data-id="calcium">カルシウム</button>
             <button class="dropdown-item click" data-id="biotin">ビオチン</button>
             <button class="dropdown-item click" data-id="folic">葉酸</button>
             <button class="dropdown-item click" data-id="pantothenic">パントテン酸</button>
             <button class="dropdown-item click" data-id="caroten">β-カロテン</button>
             <button class="dropdown-item click" data-id="lutein">ルテイン</button>
             <button class="dropdown-item click" data-id="niacin">ナイアシン</button>
             <button class="dropdown-item click" data-id="vitaminA">ビタミンA</button>
             <button class="dropdown-item click" data-id="vitaminB6">ビタミンB6</button>
             <button class="dropdown-item click" data-id="vitaminC">ビタミンC</button>
             <button class="dropdown-item click" data-id="vitaminD">ビタミンD</button>
             <button class="dropdown-item click" data-id="vitaminE">ビタミンE</button>
             <button class="dropdown-item click" data-id="vitaminK">ビタミンK</button>
             <button class="dropdown-item click" data-id="lipo">α-リポ酸</button>
           </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 d-none d-md-block pt-3 pb-5  text-center recovery_list overflow-auto" style="height:600px;">
           <h5 class="list_title">栄養素一覧</h5>
           <button class="dropdown-item click recovery-list-bottom" data-id="whey">ホエイプロテイン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="gazein">ガゼインプロテイン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="soy">ソイプロテイン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="bcaa">BCAA</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="eaa">EAA</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="hmb">HMB</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="carbohydrates">炭水化物</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="creatine">クレアチン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="glutamine">グルタミン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="arginine">アルギニン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="citrulline">シトルリン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="carnitine">L-カルニチン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="ornithine">オルニチン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="alanine">β-アラニン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="tyrosine">L-チロシン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="lycopene">リコピン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="polyphenol">ポリフェノール</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="omega">オメガ3</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="cla">共役リノール酸</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="lipo">α-リポ酸</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="dha">DHA</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="epa">EPA</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminA">ビタミンA</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminB1">ビタミンB1</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminB6">ビタミンB6</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminB12">ビタミンB12</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminC">ビタミンC</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminD">ビタミンD</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminE">ビタミンE</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminK">ビタミンK</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="niacin">ナイアシン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="lutein">ルテイン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="caroten">β-カロテン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="pantothenic">パントテン酸</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="folic">葉酸</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="biotin">ビオチン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="calcium">カルシウム</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="line">リン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="magnesium">マグネシウム</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="potassium">カリウム</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="iron">鉄分</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="copper">銅</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="youso">ヨウ素</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="mangan">マンガン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="seren">セレン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="zinc">亜鉛</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="kuromu">クロム</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="moribuden">モリブデン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="sodium">重炭酸ナトリウム</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="citric">クエン酸</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="probiotics">プロバイオティクス</button>
        </div>
        <div class="col-md-2 d-block d-md-none mt-2 mb-2 pt-3 pb-3  text-center recovery_list overflow-auto" style="height:200px;">
           <div class="list_space"></div>
           <h5 class="list_title">栄養素一覧</h5>
           <button class="dropdown-item click recovery-list-bottom" data-id="whey">ホエイプロテイン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="gazein">ガゼインプロテイン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="soy">ソイプロテイン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="bcaa">BCAA</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="eaa">EAA</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="hmb">HMB</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="carbohydrates">炭水化物</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="creatine">クレアチン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="glutamine">グルタミン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="arginine">アルギニン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="citrulline">シトルリン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="carnitine">L-カルニチン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="ornithine">オルニチン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="alanine">β-アラニン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="tyrosine">L-チロシン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="lycopene">リコピン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="polyphenol">ポリフェノール</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="omega">オメガ3</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="cla">共役リノール酸</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="lipo">α-リポ酸</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="dha">DHA</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="epa">EPA</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminA">ビタミンA</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminB1">ビタミンB1</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminB6">ビタミンB6</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminB12">ビタミンB12</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminC">ビタミンC</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminD">ビタミンD</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminE">ビタミンE</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="vitaminK">ビタミンK</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="niacin">ナイアシン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="lutein">ルテイン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="caroten">β-カロテン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="pantothenic">パントテン酸</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="folic">葉酸</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="biotin">ビオチン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="calcium">カルシウム</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="line">リン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="magnesium">マグネシウム</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="potassium">カリウム</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="iron">鉄分</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="copper">銅</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="youso">ヨウ素</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="mangan">マンガン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="seren">セレン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="zinc">亜鉛</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="kuromu">クロム</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="moribuden">モリブデン</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="sodium">重炭酸ナトリウム</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="citric">クエン酸</button>
           <button class="dropdown-item click recovery-list-bottom" data-id="probiotics">プロバイオティクス</button>
        </div>
        <div class="col-md-10 recovery_view  overflow-auto" style="height:600px;">
                <div id="text">
                    <div class="before-recovery text-center">
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection