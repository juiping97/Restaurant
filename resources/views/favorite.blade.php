@extends('layouts.app')

@section('content')
    <div class="container" style="color: white">
        <div class="row pt-5">
            @foreach($posts as $post)
                <div class="col-4 pb-4">
                    <a href="/profile/{{$post->user->id}}">
                    <img src="{{Storage::disk('s3')->url($post->user->profile->profileImage())}}" class="rounded-circle w-25">
                    </a>

                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-white" style="font-size: larger">{{$post->user->profile->restaurant_name}}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
