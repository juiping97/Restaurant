@extends('layouts.app')
@section('content')

    <table class="content-table" style="font-family: 'Fredoka One', cursive">
        <thead>
        <tr>
            <th>Restuarant Name</th>
            <th>Restuarant Country</th>
            <th>Restuarant Address</th>
            <th>Open Time</th>
        </tr>
        </thead>
        <tbody>
        @foreach($profiles as $profile)
            <tr>
                <td>{{$profile['restaurant_name']}}</td>
                <td>{{$profile['restaurant_country']}}</td>
                <td>{{$profile['restaurant_address']}}</td>
                <td>{{$profile['open_time']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .content-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>
@endsection
