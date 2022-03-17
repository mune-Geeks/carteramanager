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
        <div class="graph_body_2_1">
        @foreach($incomes as $key => $data)
        <tr>    
            <th>{{$data->id}}</th>
            <th>{{$data->u_id}}</th>
            <th>{{$data->amount}}</th>
            <th>{{$data->income_date}}</th>
            <th>{{$data->created_at}}</th>                 
        </tr>
        @endforeach

        @foreach($expenses as $key => $data)
        <tr>    
            <th>{{$data->id}}</th>
            <th>{{$data->u_id}}</th>
            <th>{{$data->amount}}</th>
            <th>{{$data->expense_date}}</th>
            <th>{{$data->created_at}}</th>                 
        </tr>
        @endforeach
        </div>
    </div>
</div>
@endsection
