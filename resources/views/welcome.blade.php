@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="column">
            <img src="/img/homepage.png"
                 style="position:relative; left:90%; top:8%; max-width: 100%; max-height: 100%"/>
            <div class="col-sm-9 col-md-6" style="text-align:center; color:white; position: absolute; top:30%; font-family: 'Fredoka One', cursive;">

                <strong><h1 align="center">Search For Your</h1></strong><p></p>
                <strong><h1 style="font-size:60px;width: 100%" align="center">RESTAURANT!!!</h1></strong><p></p>
                <a href="/explore" class="btn btn-warning"
                   style="border-radius:12px;color: white;">
                    <strong>
                        <h1 align="center">Explore Now!</h1>
                    </strong>
                </a>
            </div>
        </div>
    </div>
@endsection

<style>
    .column {
        float: left;
        width: 50%;
        padding: 15px;
    }
</style>
