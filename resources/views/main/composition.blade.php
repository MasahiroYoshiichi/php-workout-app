@extends('layouts.async')

@section('content')
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

<script>
   $(function() {
         $('.date').click(function() {
          var day = $(this).data('id');
          let init_div = document.getElementById('composition');
          init_div.textContent = null;
          $.ajax({
          type: 'GET',
          url: 'composition',
          data: {day},
          dataType: 'html',
        }).done(function (results) {
          $('#composition').html(results);
        }).fail(function (err) {
           alert('データの取得に失敗しました。');
       });
      }
    );
   });
   
</script>

 <div class="month_change text-center">
     <button class="date" data-id='{"days_in_manth":"{{$prev_days}}","get_ym":"{{$prev_date}}"}'><</button>
     <span class="month">{{ $get_ym_format }}</span>
     <button class="date" data-id='{"days_in_manth":"{{$next_days}}","get_ym":"{{$next_date}}"}'>></button>
</div>
 <canvas id="chart"></canvas>
 
 
  
  
<script>

var data = [];
var labels = [];
var colors = [];
var data2 = [];


for (i = 1; i <= {{$days_in_month}}; i++) {
  labels.push(i + "日");
}

var user_weight = [@foreach ($month_user_weight as $user_weight) {{$user_weight}}, @endforeach]
var user_fat = [@foreach ($month_user_fat as $user_fat) {{$user_fat}}, @endforeach]

var cvsChart = document.getElementById('chart');
var ctxChart = cvsChart.getContext('2d');
var myChart = new Chart(ctxChart, {
    type: 'bar',
    data: {
        datasets: [{
            label: '体重',
            yAxisID: 'weight',
            type: 'line',
            data: user_weight,
            spanGaps: true,
            borderColor: "#333",
            backgroundColor: "rgba(0,0,0,0)"
            
        },{
            label: '体脂肪',
            yAxisID: 'fat',
            data: user_fat,
            spanGaps: true,
            backgroundColor: "#B0E0E6"
            }],
        labels: labels,
    },
    options: {
      tooltips: {
            mode: 'nearest',
            intersect: false,
          },
          responsive: true,  // true（デフォルト）にすると画面の幅に合わせてしまう
      scales: {
        yAxes: [{
          id: 'weight',
          type: 'linear',
          position: 'left',
          ticks: {
            max: 120,
             min: 30,
             stepSize: 5,
             callback: function(value){
             return value + 'kg'
             },
            beginAtZero: true
          },
        }, {
          id: 'fat',
          type: 'linear',
          position: 'right',
          ticks: {
            max: 30,
             min: 0,
             stepSize: 5,
             callback: function(value){
             return value + '%'
             },
            beginAtZero: true
          },
           gridLines: {
            drawOnChartArea: false,
            },
        }]
      }
    },
});
</script>
@endsection