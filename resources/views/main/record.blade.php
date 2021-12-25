@extends('layouts.general')

@section('title', 'レコード')

@section('content')
<div class="container-fluid bg-light">
    <div class="row record-top">
        <h1>Record</h1>
    </div>
    <div class="row">
        <div class="col-md-4 text-center record_table">
             <div class="month_change">
                 <a class="table_link" href="?ym={{ $prev }}">&lt;</a>
                 <span class="month">{{ $month }}</span>
                 <a class="table_link" href="?ym={{ $next }}">&gt;</a>
             </div>
             <table class="table table-bordered day_table text-center">
                         <tr>
                             <th class="day_th">Sun</th>
                             <th class="day_th">Mon</th>
                             <th class="day_th">Tue</th>
                             <th class="day_th">Wed</th>
                             <th class="day_th">Thu</th>
                             <th class="day_th">Fri</th>
                             <th class="day_th">Sat</th>
                         </tr>
                         <div>
                         @foreach ($weeks as $week)
                             {!! $week !!}
                         @endforeach
                         </div>
                     </table>   
             </div>
             <div class="col-md-8 record-text">
                <div class="card text-dark bg-light ">
                    <div class="card-header">2021年12月1日</div>
  　　　　　　　　　　　　　　　　<div class="card-body">
                    <p>選択コース</p>
                    <p>トレーニング内容</p>
                    <p>トレーニング部位</p>
                    <p>トレーニング開始時間</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection