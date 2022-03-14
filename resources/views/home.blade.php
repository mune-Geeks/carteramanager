@extends('layouts.app')

@section('content')
<div class="body_1">
    <nav id="home_nav_bar">
        <div class="nav_bar_2">
            <ul>
                <li>
                    <a>INPUT</a>
                </li>
                <li>
                    <a href="{{ url('/graph') }}">GRAPH</a>
                    
                </li>
                <li>
                    <a href="{{ url('/calender') }}">CALENDER</a>
                </li>
                <li>
                    <a href="{{ url('/setting') }}">SETTING</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="body_2">
        <form method="POST" action="/home">
            <p>
                <select name="input_1">
                    <option value="income">INCOME</option>
                    <option value="expense">EXPENSE</option>
                </select>
            </p>
            <p>
                <label>AMOUNT&nbsp;&nbsp;&nbsp;</label>
                <input type="text">
            </p>
            <p>
                <label>CATEGORY</label>
                <input type="text">
            </p>
            <p>
                <label for="">DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="date">
            </p>
            <button>SUBMIT</button>
        </form>
    </div>
</div>
@endsection