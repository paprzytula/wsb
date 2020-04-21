@extends('layouts.app')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <ul class="list-group list-unstyled">
                                <li class="list-group-item">
                                    <h5 class="m-0">Witaj, {{ ucfirst(Auth::user()->name) }}</h5>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="m-0 text-muted">IDENTYFIKATOR</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="m-0">{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="m-0 text-muted">TWOJE SALDO</p>
                                        </div>
                                        <div class="col-8">
                                            <p class="m-0">{{ number_format($balence,2) }} PLN</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
@endsection
