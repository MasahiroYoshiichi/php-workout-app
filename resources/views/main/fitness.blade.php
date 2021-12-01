@extends('layouts.general')

@section('title', 'フィットネスコース')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-light text-dark">
            <h1 class="cours-title">FitnessCours</h1>
        </div>
        <div class="col-md-2">
            <div class="card text-dark bg-light mt-3" style="height: 20rem;">
              <div class="card-header">ワークアウト履歴</div>
              <div class="card-body">
                <p>前回トレーニング日<br>2021年12月1日</p>  
                <p>前回選択コース<br>エクササイズコース</p>
                <p>トレーニング部位<br>胸　上腕二頭筋</p>
                <p>おすすめトレーニング<br>肩、上腕三頭筋</p>
              </div>
            </div>
        </div>
        <div class="col-md-10  bg-secondary">
            <div class="movie-zone" style="height: 50rem;">
                <h2>動画を表示</h2>
            </div>
            <div class="row bg-light text-dark text-center justify-content-center pt-3">
                <div class="col-md-12">
                    <h4>トレーニングお疲れ様でした！</h4>
                    <br>
                    <p>体重と体脂肪率を入力して、日々の成果をレポートに記しましょう。</p>
                    <p>記録はレポートで確認することができます。</p>
                    <br>
                </div>
            </div>
            <hr class="cours-line">
            <div class="row bg-light text-dark text-center justify-content-center pt-3">
                <div class="col-md-3">
                    <label class="form-label" for="weight">体重を入力</label>
                    <input type="text" class="form-control" name="weight" id="weight" placeholder="kg">
                </div>
                <div class="unit">
                    <p>kg</p>
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="fat">体脂肪率を入力</label>
                    <input type="text" class="form-control" name="fat" id="fat" placeholder="%">
                </div>
                 <div class="unit">
                    <p>%</p>
                </div>
            </div>
            <div class="row justify-content-center text-center bg-light text-dark pt-3">
                <div class="col-md-5">
                    <button type="submit" class="btn btn-dark btn-lg">ワークアウトを完了する</button>
                    <p>※体重、体脂肪率の入力はなくてもワークアウトは完了できます。</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection