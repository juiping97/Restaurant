@extends('layouts.app')

@section('content')
<div class="container">
    <body style="background-color:#3B3B3C;">
    <style type="text/css">
        .btn-oblong {border-radius: 30px 30px 30px 30px;}
    </style>
    </body>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"
                     style="color: white; font-family: 'Fredoka One', cursive;">{{ __('註冊 Register') }}</div>
                <div class="align-self-md-center">
                    <img src="/svg/user_icon.svg" width="200" height="200">
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right"
                                   style="color: white; font-family: 'Fredoka One', cursive;">{{ __('姓名 Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                       value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username"
                                   class="col-md-4 col-form-label text-md-right"
                                   style="color: white; font-family: 'Fredoka One', cursive;">{{ __('帳號 Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text"
                                       class="form-control @error('username') is-invalid @enderror"
                                       name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right"
                                   style="color: white; font-family: 'Fredoka One', cursive;">{{ __('電子郵件 E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right"
                                   style="color: white; font-family: 'Fredoka One', cursive;">{{ __('密碼 Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right"
                                   style="color: white; font-family: 'Fredoka One', cursive;">{{ __('密碼確認 Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"
                                        class="btn btn-primary btn-oblong"
                                        style="color: white; font-family: 'Fredoka One', cursive;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
