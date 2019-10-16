@extends('layouts.default')

@section('content')
   <p>i am the participants page</p>
    @foreach ($participants as $participant)
        <br>
        <a href="/participants/{{ $participant->id }}">
            <li>{{ $participant->username }}</li>
        </a>
    @endforeach

@stop
