<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <title>
        @yield('title')|Restaurant list
    </title>
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link href="css/frontend.css" rel="stylesheet" >
</head>
<body>
    @include('layouts.inc.navbar')


    <div class="container">
            <div class="panel">
                <div class="list">
                    <br>
                    <h3>Restaurant list</h3>
                    @yield('content')


                </div>
            </div>

        </div>


<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-3.5.1.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
@yield('script')

</body>
</html>

