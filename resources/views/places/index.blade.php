@extends('layouts.app')

@section('content')
    <h1>Places</h1>
    @foreach($places as $place)
        <div class="well">
            <h3><a href="/places/{{$place->id}}">{{$place->place_name}}</a></h3>
        </div>
    @endforeach
    {{$places->links()}}
@endsection