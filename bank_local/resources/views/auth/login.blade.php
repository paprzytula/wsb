@extends('layouts.app')

@section('content')
<div class="container h-100" id="login">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header font-weight-bold text-center">{{ strtoupper(config('app.name')) }}</div>

                <div class="card-body">
                    <label class="mx-3 font-weight-bold">Zaloguj się na swoim koncie</label>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-right mx-3 font-weight-bold">{{ __('Addres E-Mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right mx-3 font-weight-bold">{{ __('Hasło') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Zapamiętaj mnie') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Logowanie') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
                <p class="my-3 text-muted text-center">Nie masz jeszcze konta?
                    <a href="{{ route('register') }}">{{ __('Rejestracja') }}</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
