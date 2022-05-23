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
                    <button onclick="location.href= '{{ url('/graph') }}'" type="button" class="btn btn-outline-secondary">GRAPH</button>
                </li>
                
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                    </svg>
                    <button onclick="location.href= '{{ url('/setting') }}'" type="button" class="btn btn-outline-secondary">SETTING</button>
                </li>
            </ul>
        </div>
    </nav>
    <div class="body_2">
        <form method='POST' action="store" name="form1">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user ['id'] }}">
            <div class="body_2_1">
                <h2>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group" id="typeMo">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" value="income" autocomplete="off" onchange="Radiofunction()" required>
                        <label class="btn btn-outline-primary" for="btnradio1">INCOME</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" value="expense" autocomplete="off" onchange="Radiofunction()" required>
                        <label class="btn btn-outline-primary" for="btnradio2">EXPENSE</label>
                    </div>
                </h2>
            </div>
            <div class="body_2_2">
                <h2>
                    <label>CATEGORY</label>
                    <select name="category" style="width:170px" required>
                        <option disabled selected value>--------</option>
                        <option id="cate1" value=""></option>
                        <option id="cate2" value=""></option>
                        <option id="cate3" value=""></option>
                        <option id="cate4" value=""></option>
                    </select>
                </h2>
            </div>
            <div class="body_2_3">
                <h2>
                    <label>AMOUNT&nbsp;&nbsp;&nbsp;</label>
                    <input name="amount" type="number" required>
                </h2>
            </div>
            <div class="body_2_4">
                <h2>
                    <label for="">DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input name="date" type="date" required>
                </h2>
            </div>
            <div class="body_2_5">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function Radiofunction() {
        income = document.form1.btnradio1.checked;
        expense = document.form1.btnradio2.checked;

        if(income == true){
            document.getElementById("cate1").innerText = "Gift";
            document.getElementById("cate1").value = "gift";
            document.getElementById("cate2").innerText = "Salary";
            document.getElementById("cate2").value = "salary";
            document.getElementById("cate3").innerText = "Investment";
            document.getElementById("cate3").value = "investment";
            document.getElementById("cate4").innerText = "Others";
            document.getElementById("cate4").value = "others";
        } else if(expense == true){
            document.getElementById("cate1").innerText = "Food";
            document.getElementById("cate1").value = "food";
            document.getElementById("cate2").innerText = "Shopping";
            document.getElementById("cate2").value = "shopping";
            document.getElementById("cate3").innerText = "Beauty";
            document.getElementById("cate3").value = "beauty";
            document.getElementById("cate4").innerText = "Others";
            document.getElementById("cate4").value = "others";
        } else {

        }
    }
</script>
@endsection
