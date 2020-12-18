@extends('layouts.app')
@section('content')
    <body>
    <div class="bg">
        <img src="/img/explore.png">
    </div>
    </body>
    <div class="row">
        <div class="rectangle">
            <div class="row justify-content-center">
                <a href="/taiwan">
                    <!-- <div id="DIV1" style=" background-image: url('{{asset('img/tai.jpg')}}')"></div> -->
                        <div id="DIV1"><img src="/img/explore_taiwan.png" style="width: 250px;height: 250px"></div>
                </a>
            </div>
            <div class="row justify-content-center">
                <a href="/indonesia">
                    <!-- <div id="DIV1" style=" background-image: url('{{asset('img/indonesia.jpg')}}')"></div> -->
                        <div id="DIV1"><img src="/img/explore_indonesia.png" style="width: 250px;height: 250px"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12 pt-2">
        <strong><h1 align="center"><p style="color: white;font-size: medium">&copy; 2020 NCU SE-Project Group 11<p></h1></strong><p></p>
    </div>
@endsection

<style>
    .rectangle{
        margin: auto;
        height: 650px;
        width: 750px;
        background-color: #FDC53A;
        border-radius:40px;
        opacity: 0.8;
    }

    #DIV1{
        width:150px;
        height:150px;
        margin-left: -50%;
        margin-right: -50%;
        margin-top: 60px;
        margin-bottom: 50px;
        float:left;
    }
    #DIV2{
        position: absolute;

        width:250px;
        height:180px;
        line-height:50px;
        padding:20px;
        border:2px blue solid;
    }

    .bg {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: -999;
    }
    .bg img {
        min-height: 100%;
        width: 100%;
    }
</style>
