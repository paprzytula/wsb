@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <ul class="list-group list-unstyled">
                <li class="list-group-item">
                    <h5 class="m-0">Przelew Pieniędzy</h5>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('saveTransfer') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="col-form-label text-md-right font-weight-bold mx-3">Adres E-Mail</label>
                                    <div class="col-md-12">
                                        <input id="email" placeholder="Podaj E-Mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-form-label text-md-right font-weight-bold mx-3">Kwota</label>
                                    <div class="col-md-12">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input id="amount" min="1" step="0.1" placeholder="Podaj kwotę do przelewu" type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ old('amount') }}" required autocomplete="amount" autofocus>

                                        @error('amount')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-block btn-primary">Przelej</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection