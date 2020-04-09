@extends('app')
@section('title', 'Klienci')
@section('content')
    <h1>Klienci</h1>

<a href="/customers/create">Dodaj nowego klienta</a>
<a href="/customers/?active=1">Pokaż aktywnych klientów</a>
<a href="/customers/?active=0">Pokaż nieaktywnych klientów</a>

@forelse ($customers as $customer)
<p><strong>
    <a href="/customers/{{ $customer->id }}">{{$customer->name}}</a>
    </strong> ({{ $customer->email}})</p>
@empty
    <p>Klienci jeszcze tu nie przyszli...</p>
@endforelse
@endsection


