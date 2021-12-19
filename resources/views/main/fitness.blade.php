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
                @if(empty($training_history_date))
                  <label>前回トレーニング日</label>
                  <p>前回履歴はありません</p>
                  <label>前回トレーニングコース</label>
                  <p>前回例歴はありません</p>
                  <label>前回トレーニング部位</label>
                  <p>前回履歴はありません</p>
                @else
                　<label>前回トレーニング日</label>
                　<p>{{$training_history_date->created_at->isoformat('YYYY年M月DD日(ddd)HH:mm')}}</p>
                  <label>前回トレーニングコース</label>
                  <p>{{$training_history_date->course->course_name}}</p>
                  <label>前回トレーニング部位</label>
                  <p>{{$training_history_date->training_point->training_point_name}}</p>
                @endif
               </div>
            </div>
        </div>
           <div class="col-md-10 text-center pt-3  bg-secondary">
            <form action="{{ action('MainController@training_register') }}" method="post" enctype="multipart/form-data">
                 @if (count($errors) > 0)
                   <ul>
                       @foreach($errors->all() as $e)
                         <li>{{ $e }}</li>
                       @endforeach
                   </ul>
                 @endif
               <div class="movie-zone">
                   @foreach($movie as $e)
                   <iframe width="950" height="534" src="{{$e->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   @endforeach
                   @foreach($movie as $e)
                     <input type="hidden" name="training_id[]" value="{{$e->id}}">
                     <input type="hidden" name="training_point_id[]" value="{{$e->training_point_id}}">
                     <input type="hidden" name="course_id[]" value="{{$e->course_id}}">
                   @endforeach
                    <input type="hidden" name="user_id" value="{{$user->id}}">   
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
                       <input type="text" class="form-control" name="user_weight" id="weight" placeholder="kg">
                   </div>
                   <div class="unit">
                       <p>kg</p>
                   </div>
                   <div class="col-md-3">
                       <label class="form-label" for="fat">体脂肪率を入力</label>
                       <input type="text" class="form-control" name="user_fat" id="fat" placeholder="%">
                   </div>
                    <div class="unit">
                       <p>%</p>
                   </div>
               </div>
               <div class="row justify-content-center text-center bg-light text-dark pt-3">
                   <div class="col-md-5">
                       {{ csrf_field() }}
                       <button type="submit" class="btn btn-dark btn-lg">ワークアウトを完了する</button>
                       <p>※体重、体脂肪率の入力はなくてもワークアウトは完了できます。</p>
                   </div>
               </div>
            </form>
        </div>
    </div>
</div>
@endsection