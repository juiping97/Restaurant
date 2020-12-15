@extends('layouts.app')

@section('content')
    <div class="container" style="color: white">
        <div class="row pt-5">
            @foreach($posts as $post)
                <div class="col-4 pb-4">
                    <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-25">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-white" style="font-size: larger">{{$post->user->profile->restaurantName}}</span></a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
