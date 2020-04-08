@extends('app')
@section('title', 'Klienci')
@section('content')
    <h1>Klienci</h1>

<a href="/customers/create">Dodaj nowego klienta</a>

@forelse ($customers as $customer)
<p><strong>
    <a href="/customers/{{ $customer->$id }}">{{$customer->name}}</a>
    </strong> ({{ $customer->email}})</p>
@empty
    <p>Klienci jeszcze tu nie przyszli...</p>
@endforelse
@endsection


