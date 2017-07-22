@extends('layouts.app')

@section('content')

    <div class="well landing-well">
        <h1 class="landing-header">Right now, you can find Mickey at...</h1>
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

@endsection