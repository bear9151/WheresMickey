@extends('layouts.app')

@section('content')

    <div class="well landing-well">
        <h1 class="landing-header">Right now, you can find Mickey at...</h1>
    </div>

    <div class="well">
        <img class="img-rounded place-well-image" src="https://secure.parksandresorts.wdpromedia.com/resize/mwImage/1/630/354/75/wdpromedia.disney.go.com/media/wdpro-assets/parks-and-tickets/entertainment/character-experience/magic-kingdom/character-meet-mickey-mouse-town-square/mickey-mouse-at-town-square-theater-00.jpg?03042014142117" alt="Town Square Theatre">
        <h1>Town Square Theatre</h1>
        <h3 class="place-label-show">Magic Kingdom, Main Street, U.S.A.</h3>
        <h3 class="place-label-show">WDW</h3>
    </div>
    <div class="well landing-well">
        <h1 class="landing-header">Lookin' for one of his friends?</h1>
    </div>

    <br>
    <h2 class="landing-sub-header">Where is...</h2>
    <div class="input-group input-group-lg">
        <input type="text" class="form-control" placeholder="Minnie Mouse">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">?</button>
        </span>
    </div>

    <br>
    <h2 class="landing-sub-header">Who's at...</h2>
    <div class="input-group input-group-lg">
        <input type="text" class="form-control" placeholder="Epcot">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">?</button>
        </span>
    </div>

    <br>
    <br>

@endsection