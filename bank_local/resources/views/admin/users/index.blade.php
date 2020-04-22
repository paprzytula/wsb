@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h5 class="m-0">Zarządzanie Użytkownikami</h5>

            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Imię</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">E-Mail</th>
      <th scope="col">PESEL</th>
      <th scope="col">Rola</th>
      <th scope="col">Zmiana</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
      <tr>
          <th>
              {{$user->first_name}}
          </th>
      
    
          <th>
              {{$user->last_name}}
          </th>
      
    
          <th>
              {{$user->email}}
          </th>
      
    
          <th>
              {{$user->pesel}}
          </th>
          <th>
              {{ implode(', ', $user->roles()->get()->pluck('name')->toArray())}}
          </th>
          <th>
              <a href="{{ route('admin.users.edit', $user->id)}}" class="float-left">
                  <button type="button" class="btn btn-primary btn-sm">
                Edytuj
                  </button>
              </a>
              <form action="{{route('admin.users.destroy', $user->id)}}" method="POST" class="float-left">
                  @csrf
                  {{method_field('DELETE')}}
                  <button type="submit" class="btn btn-danger btn-sm">
                      Usuń
                    </button>
              </form>
          </th>
      </tr>
      @endforeach
  </tbody>
</table>
{{ $users->links()}}
        </div>
    </div>
@endsection