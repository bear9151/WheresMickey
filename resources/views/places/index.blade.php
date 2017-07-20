@extends('layouts.app')

@section('content')
    <h1>Places</h1>
    @foreach($places as $place)
        <div class="well place-well">
            <div class="row">
                <div class="col-xs-8 col-sm-6">
                    <a class="place-link" href="/places/{{$place->id}}">{{$place->place_name}}</a><br>
                    <h5 class="place-label">{{$place->park}}, {{$place->land}}</h5>
                    <h5 class="place-label">{{$place->site}}</h5>
                </div>
                <div class="col-xs-4 col-sm-6">
                    @foreach($place->characters as $character)
                        <img class="char-icon-place img-circle" src="{{$character->img_url}}" alt="{{$character->name}}">
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
    {{$places->links()}}
@endsection