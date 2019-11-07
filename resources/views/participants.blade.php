@extends('layouts.default')

@section('content')
   <h3>i am the participants page</h3>
    @foreach ($participants as $participant)
        <br>
        <a href="/participants/{{ $participant->id }}">
            <b>{{ $participant->username }} &nbsp;{{ $participant->is_disqualified ? "Disqualified":"" }}</b>
        </a>
        
    @endforeach

@stop
