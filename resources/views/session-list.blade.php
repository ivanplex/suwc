@extends('layouts')

@section('title', 'Sessions')


@section('css')
    <link href="/css/session.css" rel="stylesheet" type="text/css">
@endsection


@section('content')
    <div class="section ws-session">
        
        <div class="section-header ws-session-header">
        Beginner's sessions
        </div>
        
        <a href="/sessions/1">
            <div class="ws-session-slot available">
            07/10/2017
            </div>
        </a>
        <div class="ws-session-slot available">
        07/10/2017
        </div>
        <div class="ws-session-slot full">
        07/10/2017
        </div>
        <div class="ws-session-slot inactive">
        07/10/2017
        </div>

    </div>

    <div class="section ws-session">

        <div class="section-header ws-session-header">
        Intermediate's sessions
        </div>
        <div class="ws-session-slot available">
        07/10/2017
        </div>
        <div class="ws-session-slot available">
        07/10/2017
        </div>
        <div class="ws-session-slot full">
        07/10/2017
        </div>
        <div class="ws-session-slot inactive">
        07/10/2017
        </div>

    </div>
@endsection
        


