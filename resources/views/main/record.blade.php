@extends('layouts.general')

@section('title', 'レコード')

@section('content')
<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-4 record_table">
             <div>
                 <a class="data_link" href="?ym={{ $prev }}">&lt;</a>
                 <span class="month">{{ $month }}</span>
                 <a class="data_link" href="?ym={{ $next }}">&gt;</a>
             </div>
             <table class="table table-bordered day_table text-center">
                         <tr>
                             <th class="day_th">日</th>
                             <th class="day_th">月</th>
                             <th class="day_th">火</th>
                             <th class="day_th">水</th>
                             <th class="day_th">木</th>
                             <th class="day_th">金</th>
                             <th class="day_th">土</th>
                         </tr>
                         @foreach ($weeks as $week)
                             {!! $week !!}
                         @endforeach
                     </table>   
             </div>
             <div class="col-md-6">
                <h2>詳細を表示</h2>
            </div>
        </div>
        
    </div>
</div>
@endsection