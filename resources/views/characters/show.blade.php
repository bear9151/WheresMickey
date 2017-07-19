@extends('layouts.app')

@section('content')
    <h1>{{$character->name}}</h1>
    <h3>can be found at:</h3>
    <ul>
        @foreach($character->places as $place)
            <li>{{$place->place_name}}</li>
        @endforeach
    </ul>
@endsection