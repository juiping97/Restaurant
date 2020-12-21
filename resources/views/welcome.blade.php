@extends('layouts.app')
@section('content')
    <body>
    <div class="bg">
        <img src="/img/welcome.png">
    </div>
    </body>
        <div class="column">
            <div class="col-sm-9 col-md-6"
                 style="text-align:center; color:white; position: absolute; top:35%; font-family: 'Fredoka One', cursive;">
                <strong><h1 align="center">Search For Your</h1></strong><p></p>
                <strong><h1 style="font-size:60px;width: 100%" align="center">RESTAURANT!!!</h1></strong><p></p>
                <a href="/explore" class="btn btn-warning"
                   style="border-radius:12px;color: white;">
                    <strong>
                        <h1 align="center">Explore Now!</h1>
                    </strong>
                </a>
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

                <form id="search_country" onsubmit="submitForm()">
                    <input type="search" id="country" name="country" value="">
                    <i class="fa fa-search"></i>
                </form>
            </div>
            <div class="col-12" style="position: absolute;top:95%;color: white">
                <strong><h1 align="center"><p style="font-size: medium">&copy; 2020 NCU SE-Project Group 11<p></h1></strong><p></p>
            </div>
        </div>
@endsection

<style>
    .column {
        float: left;
        width: 50%;
        padding: 15px;
    }
    form{
        position: absolute;
        top: 130%;
        left: 50%;
        transform: translate(-50%,-50%);
        transition: all 1s;
        width: 50px;
        height: 50px;
        background: white;
        box-sizing: border-box;
        border-radius: 25px;
        border: 4px solid white;
        padding: 5px;
    }
    input{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;;
        height: 42.5px;
        line-height: 30px;
        outline: 0;
        border: 0;
        display: none;
        font-size: 1em;
        border-radius: 20px;
        padding: 0 20px;
    }

    .fa{
        box-sizing: border-box;
        padding: 10px;
        width: 42.5px;
        height: 42.5px;
        position: absolute;
        top: 0;
        right: 0;
        border-radius: 50%;
        color: #07051a;
        text-align: center;
        font-size: 1.2em;
        transition: all 1s;
    }

    form:hover{
        width: 200px;
        cursor: pointer;
    }

    form:hover input{
        display: block;
    }

    form:hover .fa{
        background: #07051a;
        color: white;
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

<script>
    function submitForm(){
        var words = "";
        switch(document.getElementsByName("country")[0].value){
            case '台灣':
            case 'TAIWAN':
            case 'Taiwan':
            case 'taiwan':
                words = taiwan;
                break;
            case '印尼':
            case 'INDONESIA':
            case 'indonesia':
            case 'Indonesia':
                words = indonesia;
                break;
        }
        var action_src = "http://restaurant-env-1.eba-ygiaem7u.us-east-1.elasticbeanstalk.com/" + words;
        var search_country = document.getElementById('search_country');
        search_country.action = action_src ;
    }
</script>
