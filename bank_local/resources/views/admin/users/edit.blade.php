@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h5 class="m-0">Edycja Użytkownika: {{$user->first_name}} {{$user->last_name}} {{$user->pesel}}</h5>
            <form action="{{ route('admin.users.update', ['user'=>$user->id]) }}" method="POST">
                @csrf
                {{method_field('PUT')}}
                @foreach($roles as $role)
                <div class="form-check">
                    <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                  {{ $user->hasAnyRole($role->name)?'checked':'' }}>
                    <label>{{$role->name}}</label>
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary">
                    Aktualizuj
                </button>
            </form>
        </div>
    </div>
@endsection