@extends('layouts.general')

@section('title', 'トレーニング管理')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
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


<div class="container-fluid bg-light">
    <div class="row chart-title ">
      <h1 class="chart-text">Body Condition</h1>
    </div>
    <div class="row" style="background-color: #fff">
        <div class="col-md-7 ">
             <div class="management-bottom text-center" role="group" aria-label="bodyType">
               <button type="button" class="btn btn-color click"  data-id="management_chest">胸</button>
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
                         <h4 class="d-none d-md-block">部位を選択して、成果を確認してみよう!</h4>
                         <h5 class="d-block d-md-none">部位を選択して、<br>成果を確認してみよう!</h5>
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
    <div class="row d-none d-md-block chart-title2">
        <h1>Body Composition</h1>
    </div>
    <div class="row d-block d-md-none chart-title2-sm">
        <h1>Body Composition</h1>
    </div>
    <div class="row">
      <div class="col-md-10 mx-auto composition">
    　　<div id="composition" style="width: 1200px; height: 30rem;">
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
        <canvas id="chart" style="width: 1200px; height: 25rem;"></canvas>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
        
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
                  responsive: false,
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
        </div>
     </div>
    </div>
    <div class="row text-dark pb-4" style="border-bottom: solid;">
        <div class="col-md-12 text-center body-condition-top">
          body's Stats
        </div>
        <div class="col-md-6 d-none d-md-block body-condition1">
            <div class="stats-title">
               <現在の体組成>
            </div>
            <div class="stats-text">
                <p>体型<span class="condition-list">{{$user->bodyType}}</span></p>
                <p>身長<span class="condition-list">{{$user->height}}cm</span></p>
                <p>体重<span class="condition-list">{{$user->weight}}kg</span></p>
                <p>体脂肪<span class="condition-list">{{$user->fat}}%</span></p>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-block body-condition2">
            <div class="stats-title">
                <現在の体指数>
            </div>
            <div class="stats-text">
              <p>BMI<span class="condition-list">{{$bmi}}%</span></p>
              <p>適正体重<span class="condition-list">{{$appropriate_weight}}kg</span></p>
              <p>LBM<span class="condition-list">{{$lbm}}kg</span></p>
              <p>FFMI<span class="condition-list">{{$ffmi}}%</span></p>
            </div>
        </div>
        <div class="col-12 text-center d-block d-md-none body-condition1-sm">
            <div class="stats-title">
                現在の体組成
            </div>
            <div class="stats-text">
                <p>体型<span class="condition-list">{{$user->bodyType}}</span></p>
                <p>身長<span class="condition-list">{{$user->height}}cm</span></p>
                <p>体重<span class="condition-list">{{$user->weight}}kg</span></p>
                <p>体脂肪<span class="condition-list">{{$user->fat}}%</span></p>
            </div>
        </div>
        <div class="col-12 text-center d-md-none d-block body-condition2-sm">
            <div class="stats-title">
                現在の体指数
            </div>
            <div class="stats-text">
                <p>BMI<span class="condition-list">{{$bmi}}%</span></p>
                <p>適正体重<span class="condition-list">{{$appropriate_weight}}kg</span></p>
                <p>LBM<span class="condition-list">{{$lbm}}kg</span></p>
                <p>FFMI<span class="condition-list">{{$ffmi}}%</span></p>
            </div>
        </div>
    </div>
    <div class="row text-dark text-center">
      <div class="col-md-12 guide-top">
        　指数ガイド
       </div>
    </div>
    <div class="row text-dark text-center" style="padding: 3rem;">
      <div class="col-md-6 text-center">
        <div class="guide-title">
            BMIと適正体重
        </div>
        <div class="guide-text d-none d-md-block">
            <p>BMIとは、肥満度を表す指標として国際的に用いられている体格指数です。<br>
               BMIが22の時が最も病気になりにくい状態であり、適正体重と言われています。<br>
               また、BMIが25以上を肥満、18.5未満を低体重と分類しています。<br>
               健康を意識されている方は日頃から、これらの指標をチェックしましょう。
            </p>
        </div>
        <div class="guide-text text-left d-md-none d-block">
         <p>BMIとは、肥満度を表す指標として国際的に用いられている体格指数です。
            BMIが22の時は最も病気になりにくい状態であり、適正体重と言われています。
            また、BMIが25以上を肥満、18.5未満を低体重と分類しています。
            健康を意識されている方は日頃から、これらの指標をチェックしましょう。
          </p>
        </div>
          <table class="table table-bordered guide-table">
            <thead>
                <tr>
                  <th scope="col" style="color: #008B8B;">BMI値</th>
                  <th scope="col" style="color: #008B8B;">判定</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <th scope="row" style="color: black;">16.00〜16.99以下</th>
                  <td style="color: black;">痩せ</td>
              </tr>
              <tr>
                  <th scope="row" style="color: black;">17.00〜18.49以下</th>
                  <td style="color: black;">痩せぎみ</td>
              </tr>
              <tr>
                  <th scope="row" style="color: black;">18.50〜24.99以下</th>
                  <td style="color: black;">普通体重</td>
              </tr>
              <tr>
                  <th scope="row" style="color: black;">25.00〜29.99以下</th>
                  <td style="color: black;">前肥満</td>
              </tr>
              <tr>
                  <th scope="row" style="color: black;">30.00〜34.99以下</th>
                  <td style="color: black;">肥満(1度)</td>
              </tr>
              <tr>
                  <th scope="row" style="color: black;">35.00〜39.99以下</th>
                  <td style="color: black;">肥満(2度)</td>
              </tr>
              <tr>
                  <th scope="row" style="color: black;">40.00以上</th>
                  <td style="color: black;">肥満(3度)</td>
              </tr>
            </tbody>
         </table>
        </div>
      <div class="col-md-6 ">
        <div class="guide-title">
            LBMとFFMI
        </div>
        <div class="guide-text d-md-none d-block text-left">
         <p>FFMIとは自分の体の筋肉量を測ることを目的とした指標です。
            このFFMIを計算するときに、LBM(除脂肪体重)が必要です。
            この数値で自身の体脂肪以外の重量を確認することができます。
            肥満度ではなく筋肉量の多さを測ることができるため,
            筋力量の向上を目標とする場合に指標になります。
            筋力重視の方は、日頃からこの指標をチェックしましょう。
         </p>
        </div>
        <div class="guide-text d-none d-md-block">
            <p>FFMIとは自分の体の筋肉量を測ることを目的とした指標です。<br>
            　このFFMIを計算するときに、LBM(除脂肪体重)が必要です。<br>
            　この数値で自身の体脂肪以外の重量を確認することができます。<br>
          　　肥満度ではなく筋肉量の多さを測ることができるため,<br>
              筋力量の向上を目標とする場合に指標になります。<br>
              筋力重視の方は、日頃からこの指標をチェックしましょう。
            </p>
        </div>
        <table class="table table-bordered guide-table">
            <thead>
              <tr>
                  <th scope="col" style="color: #008B8B;">FFMI値</th>
                  <th scope="col" style="color: #008B8B;">判定</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <th scope="row" style="color: black;">～18</th>
                  <td style="color: black;">平均以下</td>
              </tr>
              <tr>
                  <th scope="row" style="color: black;">18～19.5</th>
                  <td style="color: black;">平均</td>
              </tr>
              <tr>
                  <th scope="row" style="color: black;">19.5～21</th>
                  <td style="color: black;">平均よりも多い</td>
              </tr>
              <tr>
                  <th scope="row" style="color: black;">22.5～26</th>
                  <td style="color: black;">アスリート並</td>
              </tr>
              <tr>
                  <th scope="row" style="color: black;">26～</th>
                  <td style="color: black;">ドーピングの可能性</td>
              </tr>
            </tbody>
         </table>
      </div>
    </div>
</div>

@endsection