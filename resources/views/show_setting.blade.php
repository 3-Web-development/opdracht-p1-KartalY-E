@extends('layouts.default')

@section('content')
    <div>
        <h1>{{ $setting->competition_name }}</h1>
        <br><b>{{ $setting->periode_start_date }}</b>
        <br><b>{{ $setting->periode_end_date }}</b>        
        <br><b>{{ $setting->code }}</b>
        <br>
        <button class="button">
            <a class="white" href="/settings/{{ $setting->id}}/edit">Edit</a>
        </button>
    </div>
@stop
