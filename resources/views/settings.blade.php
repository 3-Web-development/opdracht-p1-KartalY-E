@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3>i'm the settings page</h3>

        @foreach ($settings as $setting)
        <p>
        <a href="/settings/{{ $setting->id }}">
            <b>{{ $setting->competition_name }}</b>
        </a>
        </p>
        @endforeach

        <form class="form" action="/settings" method="post">
            @csrf
            <b><h4>Add a new period here</h4></b>
            <input type="text" name="competition_name" placeholder="Period Name">
            <input type="date" name="periode_start_date" id="">
            <input type="date" name="periode_end_date" id="">
            <input type="text"name="code" placeholder="Code">
            <br>
            <input class="button" type="submit" value="Submit">
        
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
