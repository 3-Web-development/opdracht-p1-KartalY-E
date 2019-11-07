@extends('layouts.default')

@section('content')
    <div>
        <h1>{{ $participant->username }}</h1>
        <br><span>{{ $participant->email }}</span>
        <br><span>{{ $participant->address }}</span>
        <br><span>{{ $participant->city }}</span>
        @if ($participant->is_disquabfied)
        <br><span>this user is disquabfied</span>
        @endif
        <br>
        <button class="button">
            <a class="white" href="/participants/{{ $participant->id}}/edit">Edit</a>
        </button>
    </div>
@stop
