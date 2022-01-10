@extends('layouts.general')
@section('title', 'レコード')
@section('content')

<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script>
   $(function() {
         $('.click').click(function() {
          var day = $(this).data('id');
          let init_div = document.getElementById('text');
          init_div.textContent = null;
          $.ajax({
          type: 'GET',
          url: 'day/test',
          dataType: 'html',
          data: {day}
        }).done(function (results) {
          $('#text').html(results);
        }).fail(function (err) {
           alert('ファイルの取得に失敗しました。');
       });
      }
    );
   });
</script>
 
<div class="container-fluid bg-light">
    <div class="row record-top">
        <h1>Record</h1>
    </div>
    <div class="row">
        <div class="col-md-6 d-none d-md-block text-center record-table">
             <div class="month-change">
                 <a class="table_link" href="?ym={{ $prev }}">&lt;</a>
                 <span class="month">{{ $month }}</span>
                 <a class="table_link" href="?ym={{ $next }}">&gt;</a>
             </div>
             <table class="table table-bordered day-table text-center">
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
        <div class="col-md-6 d-block d-md-none text-center record-table">
             <div class="month-change-sm">
                  <a class="table_link" href="?ym={{ $prev }}">&lt;</a>
                  <span class="month">{{ $month }}</span>
                  <a class="table_link" href="?ym={{ $next }}">&gt;</a>
             </div>
             <table class="table table-bordered day-table-sm text-center">
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
        <div class="col-md-6">
            <div id="text">
                <div class="card d-none d-md-block record-card text-dark" style="height: 39rem;">
                    <div class="card-header record-date text-center">
                        トレーニング記録管理
                    </div>
　                  <div class="card-body d-flex align-item-center justify-content-center">
　                     <h5>トレーニングした日付をクリックして、記録を確認してみましょう！</h5>
　                  </div>
                </div>
                 <div class="card d-block d-md-none record-card-sm text-dark" style="height: 35rem;">
                    <div class="card-header record-date text-center">
                        トレーニング記録管理
                    </div>
　                  <div class="card-body d-flex align-item-center justify-content-center">
　                     <h5>トレーニングした日付をクリックして、記録を確認してみましょう！</h5>
　                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection