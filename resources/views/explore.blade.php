@extends('layouts.app')
@section('content')
    <body>
    <div class="bg">
        <img src="/img/explore.png">
    </div>
    <div class="rectangle" style="position: absolute;top:10%;left:15%">
        <div class="row">
            <a href="/taiwan"><div id="DIV1" style=" background-image: url('{{asset('img/tai.jpg')}}');"></div></a>
            <a href="/indonesia"><div id="DIV1" style=" background-image: url('{{asset('img/indonesia.jpg')}}');"></div></a>
            <div id="DIV1"></div>
            <div style="clear:both;"></div>
        </div>
        <div class="row">
            <div id="DIV1"></div>
            <div id="DIV1"></div>
            <div id="DIV1"></div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div class="col-12" style="position: absolute;top:95%;color: white">
        <strong><h1 align="center"><p style="font-size: medium">&copy; 2020 NCU SE-Project Group 11<p></h1></strong><p></p>
    </div>
    </body>
@endsection

<style>
    .rectangle{
        height: 600px;
        width: 1000px;
        background-color: #FDC53A;
        border-radius:40px;
        opacity: 0.8;
    }

    #DIV1{
        width:250px;
        height:180px;
        line-height:50px;
        padding:20px;
        border:2px blue solid;
        margin-right:20px;
        margin-left: 60px;
        margin-top: 80px;
        float:left;
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
