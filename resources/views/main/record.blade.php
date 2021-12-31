@extends('layouts.general')

@section('title', 'レコード')

@section('content')

<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script>
  
   $(function() {
         $('.click').click(function() {
          var day = $(this).data('id');
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
        <div class="col-md-5 text-center record_table">
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
        <div class="col-md-7">
            <div class="card record-card text-dark bg-light">
                <div id="text"></div>
            </div>
        </div>
    </div>
</div>
@endsection