@extends('layouts.app')

@section('content')
<div class="body_1">
    <nav id="home_nav_bar">
        <div class="nav_bar_2">
            <ul>
                <li>
                    <a href="{{ url('/home') }}">INPUT</a>
                </li>
                <li>
                    <a>GRAPH</a>
                    
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
    </div>
</div>
@endsection
