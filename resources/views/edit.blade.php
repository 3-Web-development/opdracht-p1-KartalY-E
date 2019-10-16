@extends('layouts.default')

@section('content')
    <h2>edit page</h2>

    <form action="/participants/{{ $participant->id }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
  
        <input type="text" name="username" placeholder="username" value="{{ $participant->username }}">
        <input type="email" name="email" placeholder="email" value="{{ $participant->email }}">
        <input type="text" name="address" placeholder="address" value="{{ $participant->address }}">
        <input type="text" name="city" placeholder="city" value="{{ $participant->city }}">
        <button type="submit">Update</button>
     
    </form>
    <form action="/participants/{{ $participant->id }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <button type="submit">Delete</button>
    </form>
@endsection