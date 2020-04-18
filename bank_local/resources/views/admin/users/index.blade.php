@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Klienci</div>

                <div class="card-body">
                    @foreach($users as $user)
                    <div class="list-group">
                    <div class="list-group-item d-flex justify-content-between align-items-center"><label>Numer Konta: </label>{{$user->id}}</div>
                        <div class="list-group-item d-flex justify-content-between align-items-center"><label class="list-group-item-heading">Imię</label> {{$user->fname}}</div>
                        <div class="list-group-item d-flex justify-content-between align-items-center"><label class="list-group-item-heading">Nazwisko</label>{{$user->lname}}</div>
                        <div class="list-group-item d-flex justify-content-between align-items-center"><label class="list-group-item-heading">E-Mail</label>{{$user->email}}</div>
                        <div class="list-group-item d-flex justify-content-between align-items-center"><label class="list-group-item-heading">Rola</label>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</div>
                        <div class="list-group-item d-flex justify-content-between align-items-center btn-group-vertical">
                            <div class="btn-group " role="group"><label class="list-group-item-heading">Działania</label>
                                <div class="col-md-2 text-right"><a href="{{ route('admin.users.edit', $user->id)}}"><button type="button" class="btn btn-primary btn-md btn-block">Edytuj</button></a>
                                    <form action="{{ route('admin.users.destroy', $user)}}" method="POST" class="">
                                        @csrf
                                        {{method_field('DELETE')}}<button type="submit" class="btn btn-warning btn-md btn-block">Usuń</button></a>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
