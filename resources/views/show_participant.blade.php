@extends('layouts.default')

@section('content')
    <div>
        <h1>{{ $participant->username }}</h1>
        <li>{{ $participant->email }}</li>
        <li>{{ $participant->address }}</li>
        <li>{{ $participant->city }}</li>

    <a href="/participants/{{ $participant->id}}/edit">Edit</a>
    </div>
@stop
