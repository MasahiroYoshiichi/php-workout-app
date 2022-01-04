@extends('layouts.general')

@section('content')
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

<style>
.swiper-container{
  text-align: center;
}
.swiper-container .swiper-slide img{
  max-width: 100%;
  width: 100%;
  height: auto;
}
.swiper-container .swiper-slide {
  position: relative;
  width: 100%;
}
.swiper-container .swiper-slide:before {
  content:"";
  display: block;
  padding-top: 56.25%;
}
.swiper-container .swiper-slide iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
#thumbs {
  height: 20%;
  box-sizing: border-box;
  padding: 10px 0;
}
#thumbs .swiper-slide {
  width: 20%;
  height: 100%;
  opacity: 0.2;
  cursor: pointer;
}
#thumbs .swiper-slide:before {
  content:none;
}
#thumbs .swiper-slide-active {
  opacity: 1;
}
</style>
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
  
  

@endsection