@extends('layouts.default')

@section('content')
   <p>i am the participants page</p>
    @foreach ($participants as $participant)
        <br>
        <a href="/participants/{{ $participant->id }}">
            <li>{{ $participant->username }} &nbsp; <b>{{ $participant->is_disqualified ? "Disqualified":"" }}</b></li>
        </a>
        
    @endforeach

@stop
