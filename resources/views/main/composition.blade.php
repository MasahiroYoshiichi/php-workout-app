@extends('layouts.async')

@section('content')

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

 <div class="month_change">
     <button class="date" data-id='{"days_in_manth":"{{$prev_days}}","get_ym":"{{$prev_date}}"}'><</button>
     <span class="month">{{ $get_ym }}</span>
     <button class="date" data-id='{"days_in_manth":"{{$next_days}}","get_ym":"{{$next_date}}"}'>></button>
</div>
 <div class="scrollableChartWrapper">
     <div>
         <canvas id="chart" style="height: 400px"></canvas>
     </div>
     <canvas id="yAxis" width="0"></canvas>
  </div>
  
  
<script>

// Y軸コピー用 canvas
var cvsYAxis = document.getElementById('yAxis');
var ctxYAxis = cvsYAxis.getContext('2d');

// テスト用データの用意
var data = [];
var labels = [];
var colors = [];
var data2 = [];


for (i = 1; i <= {{$days_in_month}}; i++) {
  [@forEach ($month_user_weight as $e) {{$e}}, @endforeach].forEach(x => { data.push(x); });
  [@forEach ($month_user_fat as $a) {{$a}}, @endforeach].forEach(x => { data2.push(x); });
  
  labels.push(i + "日");
}

// X軸の1データ当たりの幅
var xAxisStepSize= 1.47;
// グラフ全体の幅を計算
var chartWidth = data.length * xAxisStepSize;

// グラフ描画用 canvas
var cvsChart = document.getElementById('chart');
var ctxChart = cvsChart.getContext('2d');

// グラフ描画用canvasのstyle.width(すなわち全データを描画するのに必要なサイズ)に上記の幅を設定
cvsChart.style.width = chartWidth + "px";

// canvas.width(height)はグラフ描画時に Chart により変更される(らしい)ので、下記は不要
//cvsChart.width = chartWidth;
//cvsChart.height = chartHeight;



// 二重実行防止用フラグ
var copyYAxisCalled = false;

// Y軸イメージのコピー関数
function copyYAxisImage(chart) {
  //console.log("copyYAxisCalled="+copyYAxisCalled);

  if (copyYAxisCalled) return;

  copyYAxisCalled = true;

  // グラフ描画後は、canvas.width(height):canvas.style.width(height) 比は、下記 scale の値になっている
  var scale = window.devicePixelRatio;

  // Y軸のスケール情報
  var yAxScale = chart.scales['y-axis-0'];

  // Y軸部分としてグラフからコピーすべき幅 (TODO: 良く分かっていない)
  var yAxisStyleWidth0 = yAxScale.width - 10;

  // canvas におけるコピー幅(yAxisStyleWidth0を直接使うと微妙にずれるので、整数値に切り上げる)
  var copyWidth = Math.ceil(yAxisStyleWidth0 * scale);
  // Y軸canvas の幅(右側に少し空白部を残す)
  var yAxisCvsWidth = copyWidth + 4;
  // 実際の描画幅(styleに設定する)
  var yAxisStyleWidth = yAxisCvsWidth / scale;

  // Y軸部分としてグラフからコピーすべき高さ (TODO: 良く分かっていない) ⇒これを実際の描画高とする(styleに設定)
  var yAxisStyleHeight = yAxScale.height + yAxScale.top + 10;
  // canvas におけるコピー高
  var copyHeight = yAxisStyleHeight * scale;
  // Y軸canvas の高さ
  var yAxisCvsHeight = copyHeight;

  

  // 下記はやってもやらなくても結果が変わらないっぽい
  //ctxYAxis.scale(scale, scale);

  // Y軸canvas の幅と高さを設定
  cvsYAxis.width = yAxisCvsWidth;
  cvsYAxis.height = yAxisCvsHeight;

  // Y軸canvas.style(実際に描画される大きさ)の幅と高さを設定
  cvsYAxis.style.width = yAxisStyleWidth + "px";
  cvsYAxis.style.height = yAxisStyleHeight + "px";

  // グラフcanvasからY軸部分のイメージをコピーする
  ctxYAxis.drawImage(cvsChart, 0, 0, copyWidth, copyHeight, 0, 0, copyWidth, copyHeight);

  // 軸ラベルのフォント色を透明に変更して、以降、再表示されても見えないようにする
  chart.options.scales.yAxes[0].ticks.fontColor = 'rgba(0,0,0,0)';
  chart.update();
  // 最初に描画されたグラフのY軸ラベル部分をクリアする
  ctxChart.clearRect(0, 0, yAxisStyleWidth, yAxisStyleHeight);
}

// グラフ描画
var myChart = new Chart(ctxChart, {
    type: 'bar',
    data: {
        datasets: [{
            label: '体重',
            yAxisID: 'weight',
            type: 'line',
            data: data,
            spanGaps: true,
            borderColor: "#333",
            backgroundColor: "rgba(0,0,0,0)"
            
        },{
            label: '体脂肪',
            yAxisID: 'fat',
            data: data2,
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
      responsive: false,  // true（デフォルト）にすると画面の幅に合わせてしまう
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
    plugins: [{
      // 描画完了後に copyYAxisImage() を呼び出す
      // see https://www.chartjs.org/docs/latest/developers/plugins.html
      //     https://stackoverflow.com/questions/55416218/what-is-the-order-in-which-the-hooks-plugins-of-chart-js-are-executed
      afterRender: copyYAxisImage
    }]
});
</script>
@endsection