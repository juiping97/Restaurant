@extends('layouts.app')

@section('content')
    <div class="container" style="color: white">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{Storage::disk('s3')->url($user->profile->profileImage())}}" class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center">
                        <div class="h2">{{$user->profile->restaurant_name ?? $user -> username }}</div>

                        <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                    </div>

                    <a href="/post/create">Add New Post</a>
                </div>
                @can('update',$user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan

                <div class="d-flex">
                    <div class="pr-5">Post：<strong>{{$user->posts->count()}}</strong></div>
                    <div class="pr-5">Followers：<strong>{{$user->profile->followers->count()}}</strong></div>
                    <div class="pr-5">Star：<strong>5.5</strong></div>
                </div>

                <div class="pt-4 font-weight-bold"><strong>Country：&emsp;</strong>{{$user->profile->restaurant_country}}</div>
                <div class="font-weight-bold"><strong>Telephone：&emsp;</strong>{{$user->profile->restaurant_phone}}</div>
                <div class="font-weight-bold"><strong>Address：&nbsp;</strong>{{$user->profile->restaurant_address}}</div>
                <div class="font-weight-bold"><strong>Address Url：&nbsp;</strong><a href="">{{$user->profile->restaurant_url}}</a></div>
                <div class="font-weight-bold"><strong>Open Time：&nbsp;</strong>{{$user->profile->open_time}}</div>
                <div class="font-weight-bold"><strong>Description：&nbsp;</strong>{{$user->profile->restaurant_info}}</div>
            </div>
        </div>

        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/post/{{ $post->id }}">
                        <img src="{{Storage::disk('s3')->url($post->image)}}" class="w-100 h-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
