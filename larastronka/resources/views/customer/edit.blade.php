@extends('app')
@section('content')
    <h1>Edycja danych Klienta</h1>
    <div>
        <form action="#" method="POST">

            <div>
                <label for="name">Imię</label>
                <input type="text" name="name" placeholder="Imię" autocomplete="off" value="{{ $customer->name }}">
                <p style="color:red">@error('name') {{ $message }}</p>
                @enderror
            </div>
            <br>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="email" autocomplete="off" value="{{ $customer->email }}">
                <p style="color:red">@error('email') {{ $message }}</p>
                @enderror

            </div>
            <br>
            @csrf
            <button>Zaktualizuj Klienta</button>

        </form>
    </div>
@endsection
