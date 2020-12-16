@extends('layouts.app')
@section('content')
    <img src="/img/homepage.png"
             style="position:absolute; right:0%; top:8%; max-width: 80%; max-height: 80%"/>
    <div class="row">
        <div class="col-sm-9 col-md-6" style="text-align:center; color:white; position: absolute; top:30%; font-family: 'Fredoka One', cursive;">
            <strong><h1 align="center">Search For Your</h1></strong><p></p>
            <strong><h1 style="font-size:60px" align="center">RESTAURANT!!!</h1></strong><p></p>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search Country" />
            <div class="left">
            </div>
        </div>
        <a href="/explore"
           class="btn btn-warning"
           style="position: absolute;top: 60%; left: 15%; width: 20%;
           border-radius:12px;font-size:26px;
           font-family: 'Fredoka One', cursive; color: white;";>
            Explore</a>
    </div>
@endsection
