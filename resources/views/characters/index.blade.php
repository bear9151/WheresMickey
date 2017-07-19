@extends('layouts.app')

@section('content')
    <h1>Characters</h1>
    @foreach($characters as $character)
        <div class="well char-well">
                <img class="char-icon img-circle" src="{{$character->img_url}}">
            <a class="char-link" href="/characters/{{$character->id}}">
                {{$character->name}}
            </a>
        </div>
    @endforeach
    {{$characters->links()}}
@endsection