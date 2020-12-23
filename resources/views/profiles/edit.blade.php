@extends('layouts.app')

@section('content')
    <div class="container" style="color: white">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf

            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row justify-content-center"
                         style="font-family: 'Fredoka One', cursive; color: white;">
                        <h1>~My Restaurant Info~</h1>
                    </div>

                    <div class="form-group row">
                        <label for="restaurant_name"
                               class="col-md-4 col-form-label">Restaurant Name</label>

                        <input id="restaurant_name"
                               type="text"
                               class="form-control @error('restaurant_name') is-invalid @enderror"
                               name="restaurant_name" value="{{ old('restaurant_name') ?? $user->profile->restaurant_name}}"
                               required autocomplete="restaurant_name" autofocus>

                        @error('restaurant_name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="restaurant_address"
                               class="col-md-4 col-form-label">Restaurant Address</label>

                        <input id="restaurant_address"
                               type="text"
                               class="form-control @error('restaurant_address') is-invalid @enderror"
                               name="restaurant_address" value="{{ old('restaurant_address') ?? $user->profile->restaurant_address}}"
                               required autocomplete="restaurant_address" autofocus>

                        @error('restaurant_address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="restaurant_url"
                               class="col-md-4 col-form-label">Restaurant Url</label>

                        <input id="restaurant_url"
                               type="text"
                               class="form-control @error('restaurant_url') is-invalid @enderror"
                               name="restaurant_url" value="{{ old('restaurant_url') ?? $user->profile->restaurant_url}}"
                               required autocomplete="restaurant_url" autofocus>

                        @error('restaurant_address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="restaurant_phone" class="col-md-4 col-form-label">Restaurant Telephone</label>

                        <input id="restaurant_phone"
                               type="text"
                               class="form-control @error('restaurant_phone') is-invalid @enderror"
                               name="restaurant_phone" value="{{ old('restaurant_phone') ?? $user->profile->restaurant_phone}}"
                               required autocomplete="restaurant_phone" autofocus>

                        @error('restaurant_phone')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="restaurant_country" class="col-md-4 col-form-label">Country</label>

                        <input id="restaurant_country"
                               type="text"
                               class="form-control @error('restaurant_country') is-invalid @enderror"
                               name="restaurant_country" value="{{ old('restaurant_country') ?? $user->profile->restaurant_country }}"
                               required autocomplete="restaurant_country" autofocus>

                        @error('restaurant_country')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="open_time" class="col-md-4 col-form-label">Open Time</label>

                        <input id="open_time"
                               type="text"
                               class="form-control @error('open_time') is-invalid @enderror"
                               name="open_time" value="{{ old('open_time') ?? $user->profile->open_time }}"
                               required autocomplete="open_time" autofocus>

                        @error('open_time')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="restaurant_info" class="col-md-4 col-form-label">Description</label>

                        <input id="restaurant_info"
                               type="text"
                               class="form-control @error('restaurant_info') is-invalid @enderror"
                               name="restaurant_info" value="{{ old('restaurant_info') ?? $user->profile->restaurant_info }}"
                               required autocomplete="restaurant_info" autofocus>

                        @error('restaurant_info')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Restaurant Image</label>
                        <input type="file", class="form-control-file" id="image" name="image">
                        @error('image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row pt-4"
                         style="font-family: 'Fredoka One', cursive; color: white;">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
        <form action="/profile/{{$user->id}}"
              method="POST"
              style="position:relative; left: 40%">
            @csrf

            @method('delete')
            <button id="submit"
                    name="submit"
                    class="btn btn-primary"
                    style="font-family: 'Fredoka One', cursive; color: white;">DELETE ACCOUNT
            </button>
        </form>
    </div>

@endsection
