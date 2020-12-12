@extends('layouts.app')
@section('content')
    <div class="rectangle ">
        <div class="row">
            <a href="#"><div id="DIV1" style=" background-image: url('{{asset('img/tai.jpg')}}');"></div></a>
            <a href="#"><div id="DIV1" style=" background-image: url('{{asset('img/indonesia.jpg')}}');"></div></a>
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


@endsection

<style>
    .rectangle {
        overflow: auto;
        margin: auto;
        height: 600px;
        width: 1000px;
        background-color: #FDC53A;
        border-radius:40px;
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
</style>
