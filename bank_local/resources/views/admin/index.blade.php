@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <h5 class="m-0">Witaj, {{ ucfirst(Auth::user()->name) }}</h5>

        </div>
    </div>
</div>
@endsection