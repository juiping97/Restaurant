@extends('layouts.app')
@section('content')
    <div class="col-12 pt-2">
        <div class="col-12 d-flex">
            <a href="/welcome" class="btn btn-warning" style="font-family: 'Fredoka One', cursive;">Back</a>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <strong><h1 style="color: white;font-family: 'Fredoka One', cursive">Restaurant in Taiwan</h1></strong>
        </div>
    </div>
    @foreach($profiles as $profile)
    <div class="row mb-1" id="list_part">
        <div class="col-md-9" style="margin-right: auto;margin-left: auto" id="col_list">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm bg-white  position-relative" >
                <div class="col-auto d-none d-lg-block" >
                    <img src="/img/taiwan_flag.png" alt="" width="250" height="250">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><a href="/profile/{{$profile['user_id']}}">{{$profile['restaurant_name']}}</a></strong>
                    <!--<div class="mb-1 text-muted">Star Rate</div>-->
                    <p class="card-text mb-auto">Country：<strong>{{$profile['restaurant_country']}}</strong></p>
                    <p class="card-text mb-auto">Address：<strong>{{$profile['restaurant_address']}}</strong></p>
                    <p class="card-text mb-auto">Phone：<strong>{{$profile['restaurant_phone']}}</strong></p>
                    <p class="card-text mb-auto">Open Time：<strong>{{$profile['open_time']}}</strong></p>
                    <p class="card-text mb-auto">Url：
                        <strong><a href="{{$profile['restaurant_url']}}">{{$profile['restaurant_url']}}</a></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $profiles->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection

