@extends('layouts.async')

@section('content')
<div class="card text-dark training-point-card">
     <div class="card-header leg-card-header">足のトレーニング管理</div>
  　 <div class="card-body leg-point-card-body">
  　     <div class="training-point-card-text">
          <h4>トレーニング総数：<span class="training-point-list">{{$point}}回</span></h4>
          <h4>トレーニング割合：<span class="training-point-list">{{$ratio}}%</span></h4>
          <br>
          <h4>アスリートコース実施：<span class="training-point-list">{{$athlete}}回</span></h4>
          <h4>アスリートコース割合：<span class="training-point-list">{{$athlete_ratio}}%</span></h4>
          <br>
          <h4>エクササイズコース実施：<span class="training-point-list">{{$exercise}}回</span></h4>
          <h4>エクササイズコース割合：<span class="training-point-list">{{$exercise_ratio}}%</span></h4>
          <br>
          <h4>フィットネスコース実施：<span class="training-point-list">{{$fitness}}回</span></h4>
          <h4>フィットネスコース割合：<span class="training-point-list">{{$fitness_ratio}}%</span></h4>
        </div>
     </div>
 </div>
@endsection