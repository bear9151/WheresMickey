@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="row vertical-align">
        <div class="col-sm-3">
            <img class="char-icon-show img-circle" src="{{$character->img_url}}" alt="{{$character->name}}">
        </div>
        <div class="col-sm-9">
            <div class="char-title">
                {{$character->name}}
                <span class="favicon glyphicon glyphicon-heart" aria-hidden="true"></span>
                <span class="sr-only">Click to Mark as Favorite</span>
                <span class="favicon glyphicon glyphicon-ok" aria-hidden="true"></span>
                <span class="sr-only">Click to Mark as Visited</span>
            </div>
            <div class="char-subtitle">{{$character->unit}}</div>
            <div><em>{{$character->studio}}</em></div>
        </div>
    </div>

 <div class="row">
        <div class="col-sm-6">
            <div>{{$character->description}}</div>
            <div>related chars</div>
        </div>
        <div class="col-sm-6">
            <div>{{$character->description}}</div>
            <div>related chars</div>
        </div>
    </div>

    <br>
    <br>
    <h1>can be found at:</h1>
    <ul>
        @foreach($character->places as $place)
            <li>{{$place->place_name}}</li>
        @endforeach
    </ul>
@endsection




