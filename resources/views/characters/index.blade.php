@extends('layouts.app')

@section('content')
    <h1>Characters</h1>
    @foreach($characters as $character)
        <div class="well">
            <h3><a href="/characters/{{$character->id}}">{{$character->name}}</a></h3>
        </div>
    @endforeach
@endsection