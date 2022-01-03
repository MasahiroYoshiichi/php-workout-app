@extends('layouts.general')

@section('title', 'トレーニング管理')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="./js/chartjs-plugin-labels.js"></script>

<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script>
   $(function() {
         $('.click').click(function() {
          var click = $(this).data('id');
          let init_div = document.getElementById('text');
          init_div.textContent = null;
          
          $.ajax({
          type: 'GET',
          url: click,
          dataType: 'html',
        }).done(function (results) {
          $('#text').html(results);
        }).fail(function (err) {
           alert('トレーニングを実施していません。');
       });
      }
    );
   });
</script>


<div class="container-fluid bg-light">
    <div class="row chart-title ">
      <h1 class="chart-text">Body Condition</h1>
    </div>
    <div class="row" style="background-color: #fff">
        <div class="col-md-2 d-block d-md-none dropdown text-center" aria-labelledby="dropdownMenuButton">
          <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           部位選択
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="">胸</a>
              <a class="dropdown-item" href="">背中</a>
              <a class="dropdown-item" href="">肩</a>
              <a class="dropdown-item" href="">上腕二頭筋</a>
              <a class="dropdown-item" href="">上腕三頭筋</a>
              <a class="dropdown-item" href="">足</a>
              <a class="dropdown-item" href="">お尻</a>
              <a class="dropdown-item" href="">体幹</a>
           </div>
        </div>
        <div class="col-md-7 d-none d-md-block"  >
             <div class="management-bottom text-center" role="group" aria-label="bodyType">
               <button type="button" class="btn btn-color click" data-id="management_chest">胸</button>
               <button type="button" class="btn btn-color2 click" data-id="management_back">背中</button>
               <button type="button" class="btn btn-color3 click" data-id="management_sholuder">肩</button>
               <button type="button" class="btn btn-color4 click" data-id="management_bicelder">上腕二頭筋</button>
               <button type="button" class="btn btn-color5 click" data-id="management_triceps">上腕三頭筋</button>
               <button type="button" class="btn btn-color6 click" data-id="management_leg">足</button>
               <button type="button" class="btn btn-color7 click" data-id="management_hip">お尻</button>
               <button type="button" class="btn btn-color8 click" data-id="management_body">体幹</button>
            </div>
            <div id="text">
                <div class="card text-dark training-point-card" style="height: 30rem">
                    <div class="card-header">トレーニング管理</div>
  　　    　 　　　　　　　　　<div class="card-body d-flex align-items-center justify-content-center">  
                         <h4>トレーニング部位を選択して、自分の成果を確認してみましょう!</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 workout-chart-size">
            <canvas id="workoutCount" height="300"></canvas>  
            <script>
              var count = document.getElementById("workoutCount");
              var workoutRecord = new Chart(count, {
                type: 'pie',
                data: {
                  labels: ["胸","背中","肩","上腕二頭筋","上腕三頭筋","足","お尻","体幹"],
                  datasets: [{
                      backgroundColor: [
                            "#ff6347",
                            "#00bfff",
                            "#40e0d0",	
                            "#90ee90",
                            "#ffd700",
                            "#ffa07a",
                            "#ffb6c1",
                            "#b0c4de"
                      ],
                      data: [{{$chest}},{{$back}},{{$sholuder}},{{$bicelder}},{{$triceps}},{{$leg}},{{$hip}},{{$body}}],
                  }]
                },
                options: {
                  title: {
                    display: true,
                     responsive: true,
                    text: 'ワークアウト分布'
                  },
                  plugins: {
                    labels: {
                      render: 'percentage',
                      fontColor: 'black',
                      fontSize: 20,
                      
                    }
                  }
                }
              });
          </script>
      </div>
    </div>
    <div class="row chart-title2">
        <h1>Body Composition</h1>
    </div>
    <div class="scrollableChartWrapper">
       <div>
           <canvas id="chart" style="height: 400px"></canvas>
       </div>
       <canvas id="yAxis" width="0"></canvas>
    </div>
    <div class="row text-dark" style="border-bottom: solid;">
      <div class="col-md-12 text-center body-condition-top">
        body's Stats
      </div>
      <div class="col-md-6  body-condition1">
        <p>体型<span class="condition-list">{{$user->bodyType}}</span></p>
        <p>身長<span class="condition-list">{{$user->height}}cm</span></p>
        <p>体重<span class="condition-list">{{$user->weight}}kg</span></p>
        <p>体脂肪<span class="condition-list">{{$user->fat}}%</span></p>
      </div>
      <div class="col-md-6  body-condition2">
        <p>BMI<span class="condition-list">{{$bmi}}%</span></p>
        <p>適正体重<span class="condition-list">{{$appropriate_weight}}kg</span></p>
        <p>LBI<span class="condition-list">{{$lbm}}kg</span></p>
        <p>FFMI<span class="condition-list">{{$ffmi}}%</span></p>
        <p>基礎代謝量<span class="condition-list">{{$basic}}kcal</span></p>
      </div>
    </div>
    <div class="row text-dark text-center guide">
      <div class="col-md-12">
        　指数ガイド
       </div>
    </div>
    <div class="row text-dark text-center">
      <div class="col-md-6">
        <p>BMIとは...</p>
      </div>
      <div class="col-md-6">
        <p>筋力量とは...</p>
      </div>
      <div class="col-md-6">
        <p>基礎代謝量とは...</p>
      </div>
      <div class="col-md-6">
        <p>活動代謝量とは...</p>
      </div>
    </div>




</div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

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
  [60, 65, 70, 65, 60, 65].forEach(x => { data.push(x); });
  [15, 17, 19, 17, 15, 17].forEach(x => { data2.push(x); });
  
  labels.push(i + "日");
}

// X軸の1データ当たりの幅
var xAxisStepSize= 10;
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
            borderColor: "#333",
            backgroundColor: "rgba(0,0,0,0)"
        },{
            label: '体脂肪',
            yAxisID: 'fat',
            data: data2,
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
            max: 40,
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


 
 