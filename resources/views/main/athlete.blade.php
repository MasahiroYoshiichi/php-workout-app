@extends('layouts.general')

@section('title', 'アスリートコース')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>

<script>
<!--
var slider = new Swiper ('#slider', {
nextButton: '.swiper-button-next',
prevButton: '.swiper-button-prev'
})
var thumbs = new Swiper('#thumbs', {
centeredSlides: true,
spaceBetween: 10,
slidesPerView: "auto",
touchRatio: 0.2,
slideToClickedSlide: true
});
slider.params.control = thumbs;
thumbs.params.control = slider;
-->
</script>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-light text-dark">
            <h1 class="cours-title">AthletlCours</h1>
        </div>
        <div class="col-md-2">
            <div class="card text-dark bg-light text-center training-history">
              <div class="card-header">ワークアウト履歴</div>
              <div class="card-body">
                @if(empty($history_date))
                  <label>前回トレーニング日</label>
                  <p>履歴はありません</p>
                  <label>前回トレーニングコース</label>
                  <p>例歴はありません</p>
                  <label>前回トレーニング部位</label>
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
         @if($today == $history_time) 
          <div class="col-md-10  bg-secondary">
             <div id="slider" class="swiper-container">
                <div class="swiper-wrapper">
                  @foreach($before_trainings as $before_training)
                     <div class="swiper-slide">
                         <iframe width="950" height="534" src="{{$before_training->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                   @endforeach
                </div>
                <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div>
             </div>
             <div id="thumbs" class="swiper-container">
               <div class="swiper-wrapper">
                  @foreach($before_trainings as $before_training)
                 <div class="swiper-slide">
                    <iframe width="950" height="534" src="{{$before_training->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>  
                  @endforeach
               </div>
             </div>
             <div class="row bg-light text-dark text-center  justify-content-center">
                   <div class="col-md-12 training-after">
                       <h4>トレーニングお疲れ様でした！</h4>
                       <h4>アスリートコースのトレーニングは完了しました。</h4>
                   </div>
             </div>
          </div>
         @elseif ($today == $history_sub_time)
          <div class="col-md-10 text-center pt-3  bg-secondary">
            <form action="{{ action('MainController@various_training_register') }}" method="post" enctype="multipart/form-data">
                 @if (count($errors) > 0)
                   <ul>
                       @foreach($errors->all() as $e)
                         <li>{{ $e }}</li>
                       @endforeach
                   </ul>
                 @endif
               <div class="movie-zone">
                   @foreach($training_sets as $training_set)
                   <iframe width="950" height="534" src="{{$training_set->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                       <h4>ワークアウトを完了して、トレーニング履歴を残しましょう。</h4>
                       {{ csrf_field() }}
                       <button type="submit" class="btn btn-dark btn-lg">ワークアウトを完了する</button>
                   </div>
               </div>
             </form>
          </div>
         @else
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
                   @foreach($training_sets as $training_set)
                   <iframe width="950" height="534" src="{{$training_set->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   @endforeach
                   @foreach($training_sets as $training_set)
                     <input type="hidden" name="training_id[]" value="{{$training_set->id}}">
                     <input type="hidden" name="training_point_id[]" value="{{$training_set->training_point_id}}">
                     <input type="hidden" name="course_id[]" value="{{$training_set->course_id}}">
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
               @endif
            </form>
        </div>
    </div>
</div>
@endsection

<!--<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-indicators">
 　　　　　　　　　　　　   <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
   　　　　　　　　　　　 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
   　　　　　　　　　　　 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
   　　　　　　　　　　　 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
 　　　　　　    　　　 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
 　　　　　　   　　　　 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button> 　　　　 
 　　　　　　　　　 </div>
  　　　　　 　　　<div class="carousel-inner">
                 <div class="carousel-item active">
                    <iframe  width="900" height="534" src="{{$before_training->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 </div>
                  @foreach($before_trainings as $before_training)
                 <div class="carousel-item">
                   <iframe width="900" height="534" src="{{$before_training->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                @endforeach
            </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
           </button>
         </div>-->