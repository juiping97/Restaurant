@extends('layouts.app')

@section('content')
<div class="container">
    <body style="background-color:#3B3B3C;">
    </body>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="top: 15%">
                <div class="card-header"
                     style="color: white; font-family: 'Fredoka One', cursive;">{{ __('登入 Login') }}</div>
                <div class="align-self-md-center">
                    <img src="/svg/user_icon.svg" width="200" height="200">
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right"
                                   style="color: white; font-family: 'Fredoka One', cursive;">{{ __('電子郵件 E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label"
                                           for="remember"
                                           style="color: white; font-family: 'Fredoka One', cursive;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="color: white; font-family: 'Fredoka One', cursive;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color: white; font-family: 'Fredoka One', cursive;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
