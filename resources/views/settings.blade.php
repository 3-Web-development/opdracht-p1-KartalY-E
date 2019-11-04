@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h4>i'm the settings page</h4>

        @foreach ($settings as $setting)
        <br>
        <a href="/settings/{{ $setting->id }}">
            <li>{{ $setting->competition_name }}</li>
        </a>
        @endforeach

        <form action="/settings" method="post">
            @csrf
            <b>Add a new competition here:</b><br>
            <span>Competition name</span>
            <input type="text" name="competition_name">
            
            <span> Start</span>&nbsp;
            <input type="date" name="periode_start_date" id="" >
            <input type="time" name="periode_start_time" id="">
            <span>End</span>
            <input type="date" name="periode_end_date" id="">
            <input type="time" name="periode_end_time" id="">
            <br>
            <span>code</span>
            <input type="text"name="code">
            <br>
            
            <br>
            <input type="submit" value="Submit">
        
        </form>
        <div class="errors">
            @if ($errors->any())
               @foreach ($errors->all() as $error)
                  <span>{{ $error }}</span><br>
               @endforeach
               
            @endif
         </div>   
    </div>
</div>
@endsection
