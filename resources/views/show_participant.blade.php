@extends('layouts.default')

@section('content')
    <div>
        <h1>{{ $participant->username }}</h1>
        <li>{{ $participant->email }}</li>
        <li>{{ $participant->address }}</li>
        <li>{{ $participant->city }}</li>
        @if ($participant->is_disqualified)
        <li>this user is disqualified</li>
        @endif
        <button>
            <a href="/participants/{{ $participant->id}}/edit">Edit</a>
        </button>
    </div>
@stop
