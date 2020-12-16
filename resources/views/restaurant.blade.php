@extends('layouts.app')
@section('content')
    <table class="content-table">
        <tr>
            <td>Restuarant Name</td>
            <td>Restuarant Country</td>
            <td>Restuarant Address</td>
            <td>Open Time</td>
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
@endsection
