@extends('layouts.app')

@section('content')
<div class="container h-100" id="register">
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-4">
            <div class="card">
            <div class="card-header font-weight-bold text-center">{{ strtoupper(config('app.name')) }}</div>
                <div class="card-body">
                <label class="mx-3 font-weight-bold">Załóż nowe konto</label>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-right font-weight-bold mx-3">{{ __('Imię i nazwisko') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-right font-weight-bold mx-3">{{ __('Addres E-Mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label text-md-right font-weight-bold mx-3">{{ __('Hasło') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms" id="terms" {{ old("terms") ? 'checked' : '' }}>

                                    <label class="form-check-label" for="terms">
                                        Zgoda na <a href="#">zasady i warunki</a>
                                    </label>
                                </div>
                                @error('terms')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Zakładanie konta') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <p class="my-3 text-muted text-center">Posiadasz już konto?
                    <a href="{{ route('login') }}">{{ __('Zaloguj się') }}</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
