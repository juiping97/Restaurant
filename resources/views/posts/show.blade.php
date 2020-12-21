@extends('layouts.app')

@section('content')
    <div class="container" style="color: white">
        <div class="row">
            <div class="col-8">
                <img src="{{Storage::disk('s3')->url($post->image)}}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                        </div>

                        <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{$post->user->id}}">
                                    <span class="text-white">{{$post->user->username}}</span>
                                </a>
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
        <a href="/profile/{{$post->user->id}}" class="btn btn-primary align-content-md-center pt-3 pr-3" >Back To Profile</a>

        <a href="{{route('post.destroy'),[post=>$post->id]}}" class="btn btn-primary align-content-md-center pt-3 pr-3" >Back To Profile</a>
    </div>
@endsection

<script>

</script>
