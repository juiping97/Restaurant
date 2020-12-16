@extends('layouts.frontend')

@section('title')
    Home
@endsection

@section('content')

    <h3>Restaurant list</h3>
    <div class="row mb-1" id="list_part">
        <div class="col-md-12" id="col_list">

            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm bg-white  position-relative" >
                <div class="col-auto d-none d-lg-block" >
                    <img src="/img/restaurant_example.jpg" alt="rest_img" width="200" height="250">
                </div>

                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Crarapybara</strong>
                    <div class="mb-1 text-muted">Star Rate</div>
                    <p class="card-text mb-auto">This is restaurant information .</p>
                    <a href="#" class="mb-auto stretched-link">URL</a>
                </div>

            </div>
        </div>
        <div class="col-md-12" id="col_list">

            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm bg-white  position-relative" >
                <div class="col-auto d-none d-lg-block" >
                    <img src="/img/restaurant_example.jpg" alt="rest_img" width="200" height="250">
                </div>

                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Crarapybara</strong>
                    <div class="mb-1 text-muted">Star Rate</div>
                    <p class="card-text mb-auto">This is restaurant information .</p>
                    <a href="#" class="mb-auto stretched-link">URL</a>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
