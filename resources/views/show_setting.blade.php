@extends('layouts.default')

@section('content')
    <div>
        <h1>{{ $setting->competition_name }}</h1>
        <li>{{ $setting->periode_start_date }}</li>
        <li>{{ $setting->periode_start_time }}</li>
        <li>{{ $setting->periode_end_date }}</li>
        <li>{{ $setting->periode_end_time }}</li>
        
        <li>{{ $setting->winner }}</li>
        
        <li>{{ $setting->code }}</li>
        <button>
            <a href="/settings/{{ $setting->id}}/edit">Edit</a>
        </button>
    </div>
@stop
