@extends('layouts.app')

@section('content')



    <img class="img-rounded place-well-image" src="{{$place->img_url}}" alt="{{$place->place_name}}">
    <h1>{{$place->place_name}}
        <span class="favicon glyphicon glyphicon-heart" aria-hidden="true"></span>
        <span class="sr-only">Click to Mark as Favorite</span>
        <span class="favicon glyphicon glyphicon-ok" aria-hidden="true"></span>
        <span class="sr-only">Click to Mark as Visited</span>
    </h1>
    <h3 class="place-label-show">{{$place->park}}, {{$place->land}}</h3>
    <h3 class="place-label-show">{{$place->site}}</h3>
    <br>
    <div class="row">
        <div class="col-md-6">
            @foreach($place->characters as $character)
                <img class="char-icon img-circle" src="{{$character->img_url}}" alt="{{$character->name}}">
                <a class="char-label-place" href="/characters/{{$character->id}}">{{$character->name}}</a>
                <br>
                <br>
            @endforeach
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item">Type:<span class="float-right"><strong>{{$place->type}}</strong></span></li>
                <li class="list-group-item">Posed Photos:
                    @if (($place->photos) === 1)
                        <span class="float-right glyphicon glyphicon-ok" style="color: #6fa623;" aria-hidden="true"></span>
                        <span class="sr-only">Yes</span>
                    @elseif (($place->photos) === 0)
                        <span class="float-right glyphicon glyphicon-remove" style="color: #A21010;" aria-hidden="true"></span>
                        <span class="sr-only">No</span>
                    @else
                        <span class="float-right glyphicon glyphicon-question-sign" style="color: #F0B728;" aria-hidden="true"></span>
                        <span class="sr-only">Unconfirmed</span>
                    @endif
                </li>
                <li class="list-group-item">Autographs:
                    @if (($place->autographs) === 1)
                        <span class="float-right glyphicon glyphicon-ok" style="color: #6fa623;" aria-hidden="true"></span>
                        <span class="sr-only">Yes</span>
                    @elseif (($place->autographs) === 0)
                        <span class="float-right glyphicon glyphicon-remove" style="color: #A21010;" aria-hidden="true"></span>
                        <span class="sr-only">No</span>
                    @else
                        <span class="float-right glyphicon glyphicon-question-sign" style="color: #F0B728;" aria-hidden="true"></span>
                        <span class="sr-only">Unconfirmed</span>
                    @endif
                </li>
                <li class="list-group-item">FastPass:
                    @if (($place->fastpass) === 1)
                        <span class="float-right glyphicon glyphicon-ok" style="color: #6fa623;" aria-hidden="true"></span>
                        <span class="sr-only">Yes</span>
                    @elseif (($place->fastpass) === 0)
                        <span class="float-right glyphicon glyphicon-remove" style="color: #A21010;" aria-hidden="true"></span>
                        <span class="sr-only">No</span>
                    @else
                        <span class="float-right glyphicon glyphicon-question-sign" style="color: #F0B728;" aria-hidden="true"></span>
                        <span class="sr-only">Unconfirmed</span>
                    @endif
                </li>
                <li class="list-group-item">Seasonal:
                    @if (($place->seasonal) === 1)
                        <span class="float-right glyphicon glyphicon-ok" style="color: #6fa623;" aria-hidden="true"></span>
                        <span class="sr-only">Yes</span>
                    @elseif (($place->seasonal) === 0)
                        <span class="float-right glyphicon glyphicon-remove" style="color: #A21010;" aria-hidden="true"></span>
                        <span class="sr-only">No</span>
                    @else
                        <span class="float-right glyphicon glyphicon-question-sign" style="color: #F0B728;" aria-hidden="true"></span>
                        <span class="sr-only">Unconfirmed</span>
                    @endif
                </li>
            </ul>
        </div>
    </div>
@endsection