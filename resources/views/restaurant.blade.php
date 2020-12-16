@extends('layouts.app')
@section('content')
    <table border="1">
        <tr>
            <td>Restuarant Name</td>
            <td>Restuarant Country</td>
            <td>Restuarant Address</td>
            <td>Open Time</td>
        </tr>
        <tr>
            @foreach($profiles as $profile)
                <td>{{$profile['restaurant_name']}}</td>
                <td>{{$profile['restaurant_country']}}</td>
                <td>{{$profile['restaurant_address']}}</td>
                <td>{{$profile['open_time']}}</td>
            @endforeach
        </tr>
    </table>
@endsection
