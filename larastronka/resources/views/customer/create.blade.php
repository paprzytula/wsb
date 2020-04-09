@extends('app')
@section('title', 'Dodaj Klienta')
@section('content')

<h1>Dodawanie klienta</h1>
<form action="/customers"  method="POST">
@include('customer.form')
<button>Dodaj nowego Klienta</button>

</form>
@endsection
