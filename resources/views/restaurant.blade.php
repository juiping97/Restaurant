<!doctype html>
<html>
@extends('layouts.app')
@section('content')
    <style>
        table {
            width:100%;
        }
        table, th, td {
            border: 1px solid black;
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
            background-color: green;
            color: white;
        }
    </style>
    <body>

    <table id="t01">
        <tr>
            <th>Restuarant Name</th>
            <th>Restuarant Country</th>
            <th>Restuarant Address</th>
            <th>Open Time</th>
        </tr>
        @foreach($profiles as $profile)
            <tr>
                <td>{{$profile['restaurant_name']}}</td>
                <td>{{$profile['restaurant_country']}}</td>
                <td>{{$profile['restaurant_address']}}</td>
                <td>{{$profile['open_time']}}</td>
            </tr>
        @endforeach
    </table>
    </body>
@endsection
</html>
