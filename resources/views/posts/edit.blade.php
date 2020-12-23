@extends('layouts.app')

@section('content')
    <div class="container" style="color: white">
        <form action="" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Add New Post</h1>
                    </div>
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

                        <textarea id="caption"
                               type="text"
                               class="form-control @error('caption') is-invalid @enderror"
                               name="caption" value="{{$data['caption']}}"
                                  required autocomplete="caption" autofocus placeholder="Enter Your Comment">

                        </textarea>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Update</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection