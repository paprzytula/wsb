@extends('app');

@section('title', 'Usługi')

@section('content')
    <h1>Witam na stronie Usługi</h1>
    <p>Z dodatkową linią tekstu</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eum! Voluptate aspernatur at explicabo ipsa nisi asperiores quidem laboriosam amet tempora quisquam labore, assumenda recusandae quam est nesciunt harum rerum.</p>

    <ul>
@forelse ($services as $service)
{{$service->name}}
    <li>{{$service}}</li>
    @empty
    <li>W tej chwili nie są dostępne usługi.</li>

@endforelse
    </ul>
@endsection
