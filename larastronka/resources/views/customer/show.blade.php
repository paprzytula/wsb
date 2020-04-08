@extends('app')
@section('content')
    <h1>Informacje o Kliencie</h1>
<div>    <a href="/customers">Powrót</a></div>
<br>
    <strong>Imię</strong>
    <p>{{ $customer->name }}</p>

<strong>Email</strong>
<p>{{ $customer->email }}</p>

@endsection
