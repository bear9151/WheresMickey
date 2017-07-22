@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="row vertical-align">
        <div class="col-xs-3">
            <img class="char-icon-show img-circle" src="{{$character->img_url}}" alt="{{$character->name}}">
        </div>
        <div class="col-xs-9">
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
     <br>
        <div class="col-sm-6">
            <div>{{$character->description}}</div>
            <div>related chars</div>
        </div>
        <div class="col-sm-6">
            <div>{{$character->description}}</div>
            <div>Related Characters:</div>
        </div>
    </div>
    <br>
    <hr>
        @foreach($character->places as $place)
            <div class="well place-well">
                <a class="place-link" href="/places/{{$place->id}}">{{$place->place_name}}</a><br>
                <h5 class="place-label">{{$place->park}}, {{$place->land}}</h5>
                <h5 class="place-label">{{$place->site}}</h5>
                <span class="label label-primary float-right">{{$place->pivot->category}}</span>
            </div>
        @endforeach
@endsection




