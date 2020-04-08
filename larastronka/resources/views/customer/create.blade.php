@extends('app')
@section('title', 'Dodaj Klienta')
@section('content')

<h1>Dodawanie klienta</h1>
<form action="/customers"  method="POST">
<div>
    <label for="name">Imię</label>
    <input type="text" name="name" placeholder="Imię" autocomplete="off">
</div>
<div>
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="email" autocomplete="off">
</div>
@csrf
<button>Dodaj nowego Klienta</button>

</form>
@endsection
