@extends('layouts.async')

@section('content')
<div class="row">
    <div class="col-md-12 text-center">
       <h4>胸のトレーニング総数：{{$point}}回</h4>
       <h4>全トレーニング中の割合：{{$ratio}}%</h4>
       <h4>アスリートコース選択数：{{$athlete}}回</h4>
       <h4>アスリートコース選択割合：{{$athlete_ratio}}%</h4>
       <h4>エクササイズコース選択数：{{$exercise}}回</h4>
       <h4>エクササイズコース選択割合：{{$exercise_ratio}}%</h4>
       <h4>フィットネスコース選択数：{{$fitness}}回</h4>
       <h4>フィットネスコース選択割合：{{$fitness_ratio}}%</h4>
    </div>
</div>

