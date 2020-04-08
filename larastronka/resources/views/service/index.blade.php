@extends('app')

@section('title', 'Usługi')

@section('content')
    <h1>Witam na stronie Usługi</h1>
   <p>Dodaj usługę</p>
   <form action="/service" method="POST">
       <input type="text" name="name" autocomplete="off">

       @csrf

       <button>Dodaj</button>
   </form>
    <p style="color: red;">@error('name') {{$message}} @enderror</p>

    <ul>
@forelse ($services as $service)

    <li>{{ $service->name }}</li>
    @empty
    <li>W tej chwili nie są dostępne usługi.</li>

@endforelse
    </ul>
@endsection
