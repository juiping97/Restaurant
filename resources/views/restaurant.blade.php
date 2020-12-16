@extends('layouts.app')
@section('content')
    <body>
    <table id="t01" class="center">
        <tr>
            <th>Restuarant Name</th>
            <th>Restuarant Country</th>
            <th>Restuarant Address</th>
            <th>Open Time</th>
        </tr>
        @foreach($profiles as $profile)
            <tr>
                <td><a href="/profile/{{$profile['user_id']}}">{{$profile['restaurant_name']}}</a></td>
                <td>{{$profile['restaurant_country']}}</td>
                <td>{{$profile['restaurant_address']}}</td>
                <td>{{$profile['open_time']}}</td>
            </tr>
        @endforeach
    </table>
    </body>
@endsection

<style>
    .center {
        margin-left: auto;
        margin-right: auto;
    }
    table {
        max-width: 100%;
        width:90%;
    }
    table, th, td {
        border: 2px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 15px;
        text-align: left;
    }
    #t01 tr:nth-child(even) {
        background-color: #eee;
    }
    #t01 tr:nth-child(odd) {
        background-color: #fff;
    }
    #t01 th {
        background-color: #FFC55F;
        color: white;
    }
</style>
