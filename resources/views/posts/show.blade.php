@extends('layouts.app')

@section('content')
    <div class="container" style="color: white">
        <div class="row">
            <div class="col-8">
                <img src="{{Storage::disk('s3')->url($post->image)}}" alt="" class="w-100 h-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                        </div>
                        <div>
                            <div class="font-weight-bold" align="center">
                                <h3 style="color: white; font-family: 'Fredoka One', cursive">評論區域</h3>
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
        <hr style="border-top: 1px solid white">

        <div class="row align-content-md-center pt-3 pr-3">
            <div class="d-flex justify-content-between align-items-baseline pr-4">
                <a href="/profile/{{$post->user->id}}" class="btn btn-primary" >Back To Profile</a>
            </div>

            <form action="{{route('post.destroy',$post->id)}}" method="post">
                @csrf
                <button class="btn btn-danger">Delete Post</button>
            </form>
        </div>
    </div>
@endsection

<script>

</script>
