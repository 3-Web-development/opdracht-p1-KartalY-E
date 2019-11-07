@extends('layouts.default')

@section('content')
    <h2>edit page</h2>

    <form class="form" action="/settings/{{ $setting->id }}" method="POST">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
  
        <span>Competition name</span>
        <input type="text" name="competition_name" value="{{ $setting->competition_name}}">
        
        <span> Start</span>&nbsp;
        <input type="date" name="periode_start_date" id="" value="{{ $setting->periode_start_date}}">
        <span>End</span>
        <input type="date" name="periode_end_date" id="" value="{{ $setting->periode_end_date}}">
        <br>
        <span>winner :</span>
        <span>{{ $setting->winner }}</span>
        <span>code :</span>
        <input type="text"name="code" value="{{ $setting->code}}">        
        <br>
        <button type="submit">Update</button>
        <br>
        <br>     
    </form>

    <form action="/settings/{{ $setting->id }}" method="POST">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        
        <button type="submit">Delete</button>
    </form>
@endsection