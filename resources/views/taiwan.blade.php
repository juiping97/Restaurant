@extends('layouts.app')
@section('content')
    <h3>Restaurant list</h3>
    @foreach($profiles as $profile)
    <div class="row mb-1" id="list_part">
        <div class="col-md-12" id="col_list">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm bg-white  position-relative" >
                <div class="col-auto d-none d-lg-block" >
                    <img src="/img/homepage.png" alt="rest_img" width="200" height="250">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">{{$profile['restaurant_name']}}</strong>
                    <div class="mb-1 text-muted">Star Rate</div>
                    <p class="card-text mb-auto">{{$profile['open_time']}}</p>
                    <a href="/profile/{{$profile['user_id']}}" class="mb-auto stretched-link">{{$profile['restaurant_country']}}</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
