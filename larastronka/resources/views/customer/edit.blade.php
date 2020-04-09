@extends('app')
@section('content')
    <h1>Edycja danych Klienta</h1>
    <div>
        <form action="/customers/{{$customer->id}}" method="POST">

@method('PATCH')

           @include('customer.form')

            <button>Zaktualizuj Klienta</button>

        </form>
    </div>
@endsection
