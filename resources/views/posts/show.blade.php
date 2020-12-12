@extends('layouts.app')

@section('content')
    <div class="container" style="color: white">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{$post->user->profile->profileImage()}}"
                                 class="rounded-circle w-100" style="max-width: 40px">
                        </div>

                        <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-white">{{$post->user->username}}</span>
                                </a> |
                                <a href="#" class="pl-3">Follow</a>
                            </div>
                        </div>
                    </div>

                    <hr style="border-top: 1px solid white">

                    <p>
                        <span class="font-weight-bold">
                            <a href="/profile/{{$post->user->id}}">
                                <span class="text-white">{{$post->user->username}}</span>
                            </a>
                        </span> {{$post->caption}}
                    </p>
            </div>
        </div>
    </div>
@endsection
