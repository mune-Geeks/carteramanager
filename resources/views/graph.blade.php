@extends('layouts.app')

@section('content')
<div class="body_1">
    <nav id="home_nav_bar">
        <div class="nav_bar_2">
            <ul>
                <!-- menu bar  -->
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    <button onclick="location.href= '{{ url('/home')}}'" type="button" class="btn btn-outline-secondary">INPUT</button>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                        <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z"/>
                    </svg>
                    <a>GRAPH</a>
                </li>
                
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                    </svg>
                    <button onclick="location.href= '{{ url('/setting') }}'" type="button" class="btn btn-outline-secondary">SETTING</button>
                </li>
                <!-- menu bar  -->
            </ul>
        </div>
    </nav>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <!-- display graph from here-->
                    <div class="graph_body_graph1">
                        <?php $total = 0?>
                        @foreach($incomes as $key => $data)
                        <?php 
                            $total = $total + $data->amount
                        ?>
                        @endforeach
                    </div>
                    <h5 class="card-title">Total income</h5>
                    <p class="card-text">Rs.<?php echo "$total" ?></p>
                    
                    <div id="graph_pie_income">
                        
                        <div id="app">
                            <div id="piechart" style="height: 300px;"></div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <!-- display graph from here--> 
                    <h5 class="card-title">Total Expense</h5><?php  $total_e = 0 ?>
                    @foreach($expenses as $key => $data)
                    <?php 
                        $total_e = $total_e + $data->amount
                    ?>
                    @endforeach
                    <p class="card-text">Rs.<?php echo "$total_e" ?></p>
                    <div id="graph_pie_expense">
                        <div id="app">
                            <div id="piechart2" style="height: 300px;"></div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">@sortablelink('id', 'ID')</th>
                            <th scope="col">@sortablelink('category','CATEGORY')</th>
                            <th scope="col">@sortablelink('amount','AMOUNT')</th>
                            <th scope="col">@sortablelink('income_date','DATE')</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1?>
                        @foreach($incomes as $key => $data)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$data->category}}</td>
                            <td>{{$data->amount}}</td>
                            <td>{{$data->income_date}}</td>
                        </tr>
                        <?php $count = $count + 1?>
                        @endforeach
                    </tbody>
                    <!-- -->
                </table>
                <div class="paginate-space">
                <!-- {!! $incomes->appends(\Request::except('page'))->render() !!} -->
                </div>
                
            </div>
        </div>
        <div class="col">
            <div class="card">
            <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">@sortablelink('id','ID')</th>
                            <th scope="col">@sortablelink('category','CATEGORY')</th>
                            <th scope="col">@sortablelink('amount','AMOUNT')</th>
                            <th scope="col">@sortablelink('expense_date','DATE')</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1?>
                        @foreach($expenses as $key => $data)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$data->category}}</td>
                            <td>{{$data->amount}}</td>
                            <td>{{$data->expense_date}}</td>
                        </tr>
                        <?php $count = $count + 1?>
                        @endforeach
                    </tbody>
                </table>
                <div class="paginate-space">
                    <!--{!! $expenses->appends(\Request::except('page'))->render() !!} -->
                </div>
                
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        <?php
           $total_gift = 0;
           $total_invest = 0;
           $total_salary = 0;
           $total_others = 0;

           $chartData = "";
           foreach($incomes as $key => $data){
               if($data->category == 'gift'){
                   $total_gift = $total_gift + $data->amount;
               } else if($data->category == 'investment'){
                   $total_invest = $total_invest + $data->amount;
               } else if($data->category == 'salary'){
                   $total_salary = $total_salary + $data->amount;
               } else if($data->category == 'others'){
                   $total_others = $total_others + $data->amount;
               } else {

               }
           }
           $chartData.="['gift',  ".$total_gift."],";
           $chartData.="['investment',  ".$total_invest."],";
           $chartData.="['salary',  ".$total_salary."],";
           $chartData.="['others',  ".$total_others."],";
           $chartData = rtrim($chartData, ",");
        ?>
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo $chartData?>
        ]);
        var options = {
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        <?php
           $total_food = 0;
           $total_shopping = 0;
           $total_beauty = 0;
           $total_otherse = 0;

           $chartData = "";
           foreach($expenses as $key => $data){
               if($data->category == 'food'){
                   $total_food = $total_food + $data->amount;
               } else if($data->category == 'shopping'){
                   $total_shopping = $total_shopping + $data->amount;
               } else if($data->category == 'beauty'){
                   $total_beauty = $total_beauty + $data->amount;
               } else if($data->category == 'others'){
                $total_others = $total_others + $data->amount;
            } else {
                
            }
           }
           $chartData.="['food',  ".$total_food."],";
           $chartData.="['shopping',  ".$total_shopping."],";
           $chartData.="['beauty',  ".$total_beauty."],";
           $chartData.="['others',  ".$total_others."],";
           $chartData = rtrim($chartData, ",");
        ?>
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo $chartData?>
        ]);
        var options = {
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }

        function sortFunction(chosen){
            sortType = chosen;
            document.getElementById("sortInput").value = sortType;
            document.getElementById("sortInput").submit();
        }
    </script>
@endsection
