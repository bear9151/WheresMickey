@extends('layouts.app')

@section('content')
    <h1>{{$place->place_name}}</h1>
    <h3>Characters here:</h3>
        <ul>
            @foreach($place->characters as $character)
                <li>{{$character->name}}</li>
            @endforeach
        </ul>
@endsection