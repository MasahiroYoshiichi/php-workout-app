@extends('layouts.general')

@section('title', 'トレーニング管理')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
<script src="./js/chartjs-plugin-labels.js"></script>

<div class="container-fluid bg-secondary">
    <div class="row">
        <div class="col-md-2 d-block d-md-none dropdown text-center" aria-labelledby="dropdownMenuButton">
          <button class="btn btn-light btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           部位選択
           </button>
           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">胸</a>
              <a class="dropdown-item" href="#">上腕二頭筋</a>
              <a class="dropdown-item" href="#">上腕三頭筋</a>
              <a class="dropdown-item" href="#">肩</a>
              <a class="dropdown-item" href="#">足</a>
              <a class="dropdown-item" href="#">体幹</a>
           </div>
        </div>
        <div class="col-md-3 d-none d-md-block btn-group-vertical" role="group" aria-label="bodyType" style="line-height: 5rem">
            <button type="button" class="btn btn-light btn-parts">胸</button>
            <button type="button" class="btn btn-light btn-parts">上腕二頭筋</button>
            <button type="button" class="btn btn-light btn-parts">上腕三頭筋</button>
            <button type="button" class="btn btn-light btn-parts">肩</button>
            <button type="button" class="btn btn-light btn-parts">足</button>
            <button type="button" class="btn btn-light btn-parts">体幹</button>
        </div>
        <div class="col-md-4 text-center align-self-center"><h2>※総数などを入力予定</h2></div>
        <div class="col-md-5 workoutChart" style="height:">
            <canvas id="workoutCount"></canvas>  
            <script>
              var count = document.getElementById("workoutCount");
              var workoutRecord = new Chart(count, {
                type: 'doughnut',
                data: {
                  labels: ["胸","上腕二頭筋","上腕三頭筋","肩","足","体幹"],
                  datasets: [{
                      backgroundColor: [
                            "#FFDBC9",
                            "#FFD5EC",
                            "#EAD9FF",	
                            "#D9E5FF",
                            "#D7EEFF",
                            "#CEF9DC"
                      ],
                      data: [20, 20, 20,20,20,20],
                  }]
                },
                options: {
                  title: {
                    display: true,
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
    <div class="scrollableChartWrapper">
  <!-- スクロールされる canvas を持つ div:
       - style.width を省略すると div の幅がページ幅に合わせられる;
       - style.width を指定すると div の幅（≒スクロールバーの長さ）が固定される -->
       <div>
    <!-- グラフ描画用 canvas:
         - style.height は必須;
         - style.width は全データを表示するのに必要なグラフ幅であり、JS によって設定する;
         - width,height は Chart により設定される -->
           <canvas id="chart" style="height: 400px"></canvas>
       </div>
  <!-- Y軸イメージコピー用 canvas: {style.,}{height,width} は JS によって設定する -->
       <canvas id="yAxis" width="0"></canvas>
    </div>

<!-- 以下 JavaScript 部分 -->


<script>

// Y軸コピー用 canvas
var cvsYAxis = document.getElementById('yAxis');
var ctxYAxis = cvsYAxis.getContext('2d');

// テスト用データの用意
var data = [];
var data2 = [];
var labels = [];
var colors = [];
var DATA_COUNT = "31"
for (i = 1; i - 1 < DATA_COUNT; ++i) {
  [60, 65, 70, 65, 60].forEach(x => { data.push(x); });
  [10,12,14,12,10,].forEach(x => { data2.push(x); });
  labels.push(i + "日",);
}

// X軸の1データ当たりの幅
var xAxisStepSize= 50;
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

console.log("Before chart canvas width=" + cvsChart.style.width);
console.log("Before chart canvas height=" + cvsChart.style.height);

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
  var yAxScale = chart.scales

  // Y軸部分としてグラフからコピーすべき幅 (TODO: 良く分かっていない)
  var yAxisStyleWidth0 = yAxScale.width;

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

  console.log("After chart canvas width=" + cvsChart.width);
  console.log("After chart canvas height=" + cvsChart.height);
  console.log("scale="+scale);
  console.log("copyWidth="+copyWidth);
  console.log("copyHeight="+copyHeight);
  console.log("yAxisCvsWidth="+yAxisCvsWidth);
  console.log("yAxisCvsHeight="+yAxisCvsHeight);
  console.log("yAxisStyleWidth0="+yAxisStyleWidth0);
  console.log("yAxisStyleWidth="+yAxisStyleWidth);
  console.log("yAxisStyleHeight="+yAxisStyleHeight);

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
    type: 'line',
    data: {
      labels: labels,
        datasets: [{
            label: '体重',
            type: 'line',
            data: data,
            backgroundColor: "rgba(0, 0, 0, 0)",
            borderColor: "red",
            yAxisID: 'weight',
        },{
            label: '体脂肪',
            data: data2,
            backgroundColor: "rgba(0, 0, 0, 0)",
            borderColor: "blue",
            yAxisID: 'fat',
        }]
    },
    options: {
    
      responsive: false,
      scales: {
        yAxes: [{
           id: "weight",
           type: "linear",
           position: "left",
           ticks: {
             max: 100,
             min: 20,
             stepSize: 5,
             callback: function(value, index, values){
             return value + 'kg'
             },
             beginAtZero: true 
             } 
          },{
           id: "fat",
           type: "linear",
           position: "right",
           ticks: {
           max: 50,
           min: 0,
           stepSize: 5,
           callback: function(value, index, values){
           return value + '%'
           },
           beginAtZero: true 
           } 
        }]
      }
    },
    plugins: [{
      afterRender: copyYAxisImage
    }]
});
</script>

  
</div>
@endsection


 
 