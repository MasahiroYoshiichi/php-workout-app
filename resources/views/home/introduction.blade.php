@extends('layouts.general')

@section('title','コース紹介')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 introduction-title">
            コース紹介
        </div>
        <div class="col-md-7 d-block d-md-none pt-4 a-cours">
            <h2>アスリートコース</h2>
            <br>
             <p>このコースでは、高負荷かつ持久力が鍛えられるトレーニングを提供しています。</p>
             <p>スポーツをされている方や日常的にトレーニングをされている方にお薦めできます。</p>
             <p>内容はウエイトトレーニングと自重トレーニングをミックスしたハイブリッドトレーニングになります。</p>
             <p>あなたのトレーニングに新たな刺激を与えてくれることでしょう。</p>
             <p>さぁ!アスリートコースで新たな肉体、能力を手に入れましょう!</p>
        </div>
        <div class="col-md-7 d-none d-md-block pt-4 a-cours">
            <h2>アスリートコース</h2>
            <br>
             <p>このコースでは、高負荷かつ持久力が鍛えられるトレーニングを提供しています。</p>
             <p>スポーツをされている方や日常的にトレーニングをされている方にお薦めできます。</p>
             <p>内容はウエイトトレーニングと自重トレーニングをミックスしたハイブリッドトレーニングになります。</p>
             <p>あなたのトレーニングに新たな刺激を与えてくれることでしょう。</p>
             <p>さぁ!アスリートコースで新たな肉体、能力を手に入れましょう!</p>
        </div>
        <div class="col-md-5 a-cours  px-0 mx-0">
            <img class="img-fluid" src="https://image.freepik.com/free-photo/fitness-in-the-gym-weightlifting_144627-31106.jpg"width="720%">
        </div>
        <div class="col-md-7 d-block d-md-none pt-4 e-cours">
            <h2>エクササイズコース</h2>
            <br>
            <p>このコースでは、中負荷~低負荷を中心とした心地いいトレーニングを提供しています。</p>
            <p>スポーツ経験者や活動的な方にお薦めできます。</p>
            <p>内容は中負荷~低負荷の自重トレーニングとダンベルトレーニングがメインになります。</p>
            <p>良い汗をかいて、毎日の生活をより充実したものにしましょう。</p>
            <p>さぁ！エクササイズコースで楽しく体づくりを始めましょう！</p>
        </div>
        <div class="col-md-7 pt-4 d-none d-md-block e-cours">
            <h2>エクササイズコース</h2>
            <br>
            <p>このコースでは、中負荷~低負荷を中心とした心地いいトレーニングを提供しています。</p>
            <p>スポーツ経験者や活動的な方にお薦めできます。</p>
            <p>内容は中負荷~低負荷の自重トレーニングとダンベルトレーニングがメインになります。</p>
            <p>気持ちの良い汗をかいて、毎日の生活をより充実したものにしましょう。</p>
            <p>さぁ！エクササイズコースで楽しく体づくりを始めましょう！</p>
        </div>
        <div class="col-md-5 e-cours px-0 mx-0">
            <img class="img-fluid" src="https://image.freepik.com/free-photo/close-up-on-couple-doing-crossfit-workout_23-2149080424.jpg" width="720%">
        </div>
        <div class="col-md-7  d-block d-md-none pt-4 f-cours">
            <h2>フィットネスコース</h2>
            <br>
            <p>このコースでは、低負荷なトレーニングを中心とした、誰でも始めやすいトレーニングを提供しています。</p>
            <p>健康を意識されている方や運動を始めたい方にお薦めできます。</p>
            <p>内容はストレッチや低負荷の自重トレーニングなど<br>体への負担が少ない構成になります。</p>
            <p>トレーニングを始める方への第一歩です。</p>
            <p>さぁ！フィットネスコースで健康的な生活を始めてみましょう！</p>
        </div>
        <div class="col-md-7  d-none d-md-block pt-4 f-cours">
            <h2>フィットネスコース</h2>
            <br>
            <p>このコースでは、低負荷なトレーニングを中心とした、誰でも始めやすいトレーニングを提供しています。</p>
            <p>生活に運動を取り入れたい方や健康を意識されている方にお薦めできます。</p>
            <p>内容はストレッチや低負荷の自重トレーニングなど体への負担が少ない構成になります。</p>
            <p>トレーニングを始める方への第一歩です。</p>
            <p>さぁ！フィットネスコースで健康的な生活を始めてみましょう！</p>
        </div>
        <div class="col-md-5 f-cours px-0 mx-0">
            <img class="img-fluid" src="https://image.freepik.com/free-photo/doing-abs-on-the-floor-in-the-gym-beautiful-female-fitness-woman_146671-16454.jpg" width="720%">
        </div>
        <div class="col-md-12 text-center mt-4">
            <a type="button" class="btn btn-light btn-lg" href="/register">新規登録</a>
        </div>
    </div>
</div>
@endsection



