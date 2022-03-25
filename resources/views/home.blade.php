@extends('layouts.app')

@section('content')
<div class="body_1">
    <nav id="home_nav_bar">
        <div class="nav_bar_2">
            <ul>
                <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
                    <a>INPUT</a>
                </li>
                <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z"/>
                </svg>
                    <a href="{{ url('/graph') }}">GRAPH</a>
                    
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-day" viewBox="0 0 16 16">
                        <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                    <a href="{{ url('/calender') }}">CALENDER</a>
                </li>
                <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
  <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
</svg>
                    <a href="{{ url('/setting') }}">SETTING</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="body_2">
        <form method='POST' action="/store">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user ['id'] }}">
            <p>
                <select id="typeofmoney" name="input_1" onchange="myfunction()" required>
                    <option disabled selected value>--------</option>
                    <option value="income">INCOME</option>
                    <option value="expense">EXPENSE</option>
                </select>
            </p>
            <p>
                <label>CATEGORY</label>
                <select name="category" style="width:170px" required>
                    <option>--------</option>
                    <option id="cate1" value=""></option>
                    <option id="cate2" value=""></option>
                    <option id="cate3" value=""></option>
                    <option id="cate4" value=""></option>
                </select>
            </p>
            <p>
                <label>AMOUNT&nbsp;&nbsp;&nbsp;</label>
                <input name="amount" type="number" required>
            </p>
            <p>
                <label for="">DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input name="date" type="date" required>
            </p>
            <button type="submit" class="btn btn-outline-success">SUBMIT</button>
        </form>
    </div>
</div>
<script>
    function myfunction(){
        var type = document.getElementById("typeofmoney").value;
        if(type == "income"){
            document.getElementById("cate1").innerText = "gift";
            document.getElementById("cate1").value = "gift";
            document.getElementById("cate2").innerText = "salary";
            document.getElementById("cate2").value = "salary";
            document.getElementById("cate3").innerText = "investment";
            document.getElementById("cate3").value = "investment";
            document.getElementById("cate4").innerText = "others";
            document.getElementById("cate4").value = "others";
        }else if(type == "expense"){
            document.getElementById("cate1").innerText = "food";
            document.getElementById("cate1").value = "food";
            document.getElementById("cate2").innerText = "shopping";
            document.getElementById("cate2").value = "shopping";
            document.getElementById("cate3").innerText = "beauty";
            document.getElementById("cate3").value = "beauty";
            document.getElementById("cate4").innerText = "others";
            document.getElementById("cate4").value = "others";
        } else {
            
        }
    }
</script>
@endsection
