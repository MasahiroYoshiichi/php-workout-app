@extends('layouts.async')
@section('content')

<div class="d-block d-md-none card record-card-sm text-dark">
     <div class="card-header record-date text-center">{{$training_date->created_at->isoformat('YYYY年M月DD日(ddd)')}}</div>
     　<div class="record-card-body-sm text-center"  style="font-size: 0.7rem">
     　     <div class="record-title-sm">
     　         <選択コース>
     　     </div>
     　    <ul class="record-card-text-sm">
     　         @foreach($training_courses as $training_course)
     　              <ol>
     　                 {{$training_course->course_name}}
     　              </ol>
     　         @endforeach
     　    </ul>
     　     <div class="record-title-sm">
     　         <トレーニング内容>
     　     </div>
     　     <ul class="record-card-text-sm">
     　           @foreach($training_names as $training_name)
     　           <ol>
     　               {{$training_name->training->training_name}}
     　           </ol>
     　            @endforeach
     　     </ul>
     　     <div class="record-title-sm">
     　         <トレーニング部位>
     　     </div>
     　     <ul class="record-card-text-sm">
     　          @foreach($training_parts as $training_part)
     　              <ol>
     　                 {{$training_part->training_point_name}}  
     　              </ol>
     　            @endforeach      
     　     </ul>
     　     <div class="record-title-sm">
     　         <トレーニング終了時間>
     　     </div>
     　     <div class="record-card-time-sm">
     　             {{$training_time->created_at->format('Y年m月d日 H時:i分')}}
     　     </div>
      </div>
 </div>
 <div class="d-none d-md-block card record-card text-dark">
     <div class="card-header record-date text-center">{{$training_date->created_at->isoformat('YYYY年M月DD日(ddd)')}}</div>
     　<div class="record-card-body">
     　     <div class="record-title">
     　         <選択コース>
     　     </div>
     　     <div class="record-card-text">
     　             @foreach($training_courses as $training_course)
     　                {{$training_course->course_name}}
     　             @endforeach
     　     </div>
     　     <div class="record-title">
     　         <トレーニング内容>
     　     </div>
     　       <ul class="record-name-text">
     　           @foreach($training_names as $training_name)
     　           <ol>
     　               {{$training_name->training->training_name}}
     　           </ol>
     　            @endforeach
     　       </ul>
     　     <div class="record-title">
     　         <トレーニング部位>
     　     </div>
     　     <div class="record-card-text">
     　            @foreach($training_parts as $training_part)
     　              {{$training_part->training_point_name}}
     　            @endforeach
     　     </div>
     　     <div class="record-title">
     　         <トレーニング終了時間>
     　     </div>
     　     <div class="record-card-time">
     　             {{$training_time->created_at->format('Y年m月d日 H時:i分')}}
     　     </div>
      </div>
 </div>
@endsection