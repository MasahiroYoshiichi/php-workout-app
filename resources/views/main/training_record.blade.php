@extends('layouts.async')

@section('content')
<div class="card-header record-date text-center">{{$training_date->created_at->isoformat('YYYY年M月DD日(ddd)')}}</div>
　<div class="card-body text-center">
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
　           <li>
　               {{$training_name->training->training_name}}
　           </li>
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
@endsection