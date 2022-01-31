@extends('layouts.general')

@section('title', 'フィットネスコース')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-light d-none d-md-block text-dark">
            <h1 class="cours-title">FitnessCours</h1>
        </div>
         <div class="col-md-12 d-block d-md-none bg-light text-dark text-center">
            <h1 class="cours-title">FitnessCours</h1>
        </div>
        <div class="col-md-2 d-none d-md-block">
            <div class="card text-dark bg-light text-center training-history">
              <div class="card-header">ワークアウト履歴</div>
              <div class="card-body">
                @if(empty($history_date))
                  <label class="history-label">前回トレーニング日</label>
                  <p>履歴はありません</p>
                  <label class="history-label">前回トレーニングコース</label>
                  <p>履歴はありません</p>
                  <label class="history-label">前回トレーニング部位</label>
                  <p>履歴はありません</p>
                @else
                　<label class="history-label">前回トレーニング日</label>
                　<p>{{$history_date->created_at->isoformat('YYYY年M月DD日(ddd)')}}</p>
                  <label class="history-label">前回トレーニングコース</label>
                  <p>{{$history_date->course->course_name}}</p>
                  <label class="history-point-label">前回トレーニング部位</label>
                  @foreach ($history_point_names as $history_point_name)
                  <p>{{$history_point_name->training_point_name}}</p>
                  @endforeach
                @endif
              </div>
            </div>
        </div>
        <div class="col-12 p-0 d-block d-md-none">
            <div class="col-8 mx-auto  history-top text-center">ワークアウト履歴</div>
            @if(empty($history_date))
              <div class="col-8 offset-2 pl-4 history-text">
            　  <span class="history-label-sm">前回トレーニング日</span>履歴はありません
              </div>
              <div class="col-8 offset-2 pl-4 history-text">
            　  <span class="history-label-sm">前回トレーニングコース</span>履歴はありません
              </div>
              <div class="col-8 offset-2 pl-4 history-text">
            　  <span class="history-label-sm">前回トレーニング部位</span>履歴はありません
              </div>
            @else
             <div class="col-12 text-center history-text">
            　  <p><span class="history-label-sm">前回トレーニング日</span>{{$history_date->created_at->isoformat('YYYY年M月DD日(ddd)')}}</p>
              </div>
              <div class="col-12 text-center history-text">
                <p><span class="history-label-sm">前回トレーニングコース</span>{{$history_date->course->course_name}}</p>
              </div>
              <div class="col-12 text-center history-text">
                 <p><span class="history-label-sm">前回トレーニング部位</span>
                   @foreach ($history_point_names as $history_point_name)
                   <span>{{$history_point_name->training_point_name}}</span>
                   @endforeach
                 </p>
              </div>
             @endif
             <div class="col-12" style="height: 1.2rem; background-color: #fff;"></div>
        </div>
        @if($today == $history_time) 
        <div class="col-md-10 d-none d-md-block" style="background-color: #778899">
           <div class="movie-zone text-center overflow-auto pb-4" style="height:635px;">
              @foreach($before_trainings as $before_training)
               <label class="main_training_label">{{$before_training->training_name}}</label>
               <iframe width="90%" height="90%" src="{{$before_training->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              @endforeach
           </div>
           <div class="row bg-light text-dark text-center justify-content-center pt-3">
              <div class="col-md-12 training-after">
                  <h4>トレーニングお疲れ様でした！</h4>
                  <h4>本日のフィットネスコースは実施しました。</h4>
              </div>
           </div>
         </div>
         <div class="col-md-10 d-block d-md-none" style="background-color: #778899">
            <div class="movie-zone text-center overflow-auto pb-4" style="height:635px;">
                 @foreach($before_trainings as $before_training)
                  <label class="main_training_label_sm">{{$before_training->training_name}}</label>
                  <iframe width="95%" height="40%" src="{{$before_training->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 @endforeach
           </div>
           <div class="row bg-light text-dark text-center justify-content-center pt-3">
                 <div class="col-md-12 training-after">
                     <h5>トレーニングお疲れ様でした！</h5>
                     <h6>本日のフィットネスコースは実施しました。</h6>
                </div>
           </div>
         </div>
         @elseif ($today == $history_sub_time)
          <div class="col-md-10 d-none d-md-block" style="background-color: #778899">
            <form action="{{ action('MainController@various_training_register') }}" method="post" enctype="multipart/form-data">
                 @if (count($errors) > 0)
                   <ul>
                       @foreach($errors->all() as $e)
                         <li>{{ $e }}</li>
                       @endforeach
                   </ul>
                 @endif
               <div class="movie-zone text-center overflow-auto pb-4" style="height:635px;">
                   @foreach($training_sets as $training_set)
                   <label class="main_training_label">{{$training_set->training_name}}</label>
                   <iframe width="90%" height="90%" src="{{$training_set->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   @endforeach
                   @foreach($training_sets as $training_set)
                     <input type="hidden" name="training_id[]" value="{{$training_set->id}}">
                     <input type="hidden" name="training_point_id[]" value="{{$training_set->training_point_id}}">
                     <input type="hidden" name="course_id[]" value="{{$training_set->course_id}}">
                   @endforeach
                    <input type="hidden" name="user_id" value="{{$user->id}}">   
               </div>
                <div class="row bg-light text-dark text-center justify-content-center">
                   <div class="col-md-12  training-after">
                       <h4>トレーニングお疲れ様でした！</h4>
                       <h4>ワークアウトを完了して、履歴を残しましょう。</h4>
                       {{ csrf_field() }}
                       <button type="submit" class="btn btn-dark btn-lg">ワークアウトを完了する</button>
                   </div>
               </div>
             </form>
          </div>
          <div class="col-md-10 d-block d-md-none" style="background-color: #778899">
            <form action="{{ action('MainController@various_training_register') }}" method="post" enctype="multipart/form-data">
                 @if (count($errors) > 0)
                   <ul>
                       @foreach($errors->all() as $e)
                         <li>{{ $e }}</li>
                       @endforeach
                   </ul>
                 @endif
               <div class="movie-zone text-center overflow-auto pb-4" style="height:635px;">
                   @foreach($training_sets as $training_set)
                   <label class="main_training_label_sm">{{$training_set->training_name}}</label>
                   <iframe width="95%" height="40%" src="{{$training_set->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   @endforeach
                   @foreach($training_sets as $training_set)
                     <input type="hidden" name="training_id[]" value="{{$training_set->id}}">
                     <input type="hidden" name="training_point_id[]" value="{{$training_set->training_point_id}}">
                     <input type="hidden" name="course_id[]" value="{{$training_set->course_id}}">
                   @endforeach
                    <input type="hidden" name="user_id" value="{{$user->id}}">   
               </div>
                <div class="row bg-light text-dark text-center justify-content-center">
                   <div class="col-md-12  training-after">
                       <h5>トレーニングお疲れ様でした！</h5>
                       <h6>ワークアウトを完了して、履歴を残しましょう。</h6>
                       {{ csrf_field() }}
                       <button type="submit" class="btn btn-dark mt-2">ワークアウトを完了する</button>
                   </div>
               </div>
             </form>
          </div>
         @else
            <div class="col-md-10 d-none d-md-block" style="background-color: #778899">
            <form action="{{ action('MainController@training_register') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                  <ul class="text-center m-0 p-0">
                   @foreach($errors->all() as $e)
                     <ol>{{ $e }}</ol>
                   @endforeach
                  </ul>
                @endif
               <div class="movie-zone text-center overflow-auto pb-4" style="height:635px;">
                   @foreach($training_sets as $training_set)
                   <label class="main_training_label">{{$training_set->training_name}}</label>
                   <iframe width="90%" height="90%" src="{{$training_set->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   @endforeach
                   @foreach($training_sets as $training_set)
                     <input type="hidden" name="training_id[]" value="{{$training_set->id}}">
                     <input type="hidden" name="training_point_id[]" value="{{$training_set->training_point_id}}">
                     <input type="hidden" name="course_id[]" value="{{$training_set->course_id}}">
                   @endforeach
                    <input type="hidden" name="user_id" value="{{$user->id}}">   
               </div>
               <div class="row bg-light text-dark text-center justify-content-center pt-3">
                   <div class="col-md-12 pt-2">
                       <h4>トレーニングお疲れ様でした！</h4>
                       <br>
                       <p>日々の成果を履歴に残しましょう！</p>
                       <p>記録はトレーニング管理で確認することができます。</p>
                       <br>
                   </div>
               </div>
               <hr class="cours-line">
               <div class="row bg-light text-dark text-center justify-content-center pt-3">
                   <div class="col-md-3">
                       <label class="form-label" for="weight">体重を入力</label>
                       <input type="number" required class="form-control border-dark" style="box-shadow:none !important;" name="user_weight" id="weight" placeholder="kg">
                   </div>
                   <div class="unit">
                       <p>kg</p>
                   </div>
                   <div class="col-md-3">
                       <label class="form-label" for="fat">体脂肪率を入力</label>
                       <input type="number" class="form-control border-dark" style="box-shadow:none !important;" name="user_fat" id="fat" placeholder="%">
                   </div>
                    <div class="unit">
                       <p>%</p>
                   </div>
               </div>
               <div class="row justify-content-center text-center bg-light text-dark pt-3">
                   <div class="col-md-5">
                       {{ csrf_field() }}
                       <button type="submit" class="btn btn-dark btn-lg">ワークアウトを完了する</button>
                       <p>※体脂肪率の入力はなくても完了できます。</p>
                   </div>
               </div>
            </form>
         </div>
         <div class="col-md-10 d-block d-md-none" style="background-color: #778899">
            <form action="{{ action('MainController@training_register') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                  <ul class="text-center m-0 p-0">
                   @foreach($errors->all() as $e)
                     <ol>{{ $e }}</ol>
                   @endforeach
                  </ul>
                @endif
               <div class="movie-zone text-center overflow-auto pb-4" style="height:635px;">
                   @foreach($training_sets as $training_set)
                   <label class="main_training_label_sm">{{$training_set->training_name}}</label>
                   <iframe width="95%" height="40%" src="{{$training_set->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   @endforeach
                   @foreach($training_sets as $training_set)
                     <input type="hidden" name="training_id[]" value="{{$training_set->id}}">
                     <input type="hidden" name="training_point_id[]" value="{{$training_set->training_point_id}}">
                     <input type="hidden" name="course_id[]" value="{{$training_set->course_id}}">
                   @endforeach
                    <input type="hidden" name="user_id" value="{{$user->id}}">   
               </div>
               <div class="row bg-light text-dark text-center justify-content-center pt-3">
                   <div class="col-md-12 pt-2">
                       <h4>トレーニングお疲れ様でした！</h4>
                    　 <p>日々の成果を履歴に残しましょう！</p>
                       <p>記録はトレーニング管理で確認することができます。</p>
                       <br>
                   </div>
               </div>
               <hr class="cours-line">
               <div class="row bg-light text-dark text-center pt-3">
                   <div class="col-4 offset-2">
                       <label class="form-label" for="weight">体重</label>
                       <input type="number" required class="form-control text-center border-dark" style="box-shadow:none !important;" name="user_weight" id="weight" placeholder="kg">
                       <span> kg</span>
                   </div>
                   <div class="col-4">
                       <label class="form-label" for="fat">体脂肪率</label>
                       <input type="number" class="form-control text-center border-dark" style="box-shadow:none !important;" name="user_fat" id="fat" placeholder="%">
                        <span>%</span>
                   </div>
               </div>
              
               <div class="row justify-content-center text-center bg-light text-dark pt-3">
                   <div class="col-md-5">
                       {{ csrf_field() }}
                       <button type="submit" class="btn btn-dark mb-3">ワークアウトを完了する</button>
                        <p>※体脂肪率の入力はなくても完了できます。</p>
                   </div>
               </div>
            </form>
         </div>
        @endif
    </div>
</div>
@endsection   