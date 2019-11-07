@extends('layouts.default')

@section('content')
   <h3>Fill in and win a new bag</h3>

   <form class="form" action="/scan" method="POST">
      {{ csrf_field() }}

      <input type="text" name="username" placeholder="username" value="{{ old('username') }}" required>
      <input type="email" name="email" placeholder="email" value="{{ old('email') }}" required>
      <input type="text" name="address" placeholder="address" value="{{ old('address') }}" required>
      <input type="text" name="city" placeholder="city" value="{{ old('city') }}" required>
      <input type="text" name="code" placeholder="code" value="{{ old('code') }}" required>
      <br><button class="button" type="submit">Submit</button>
   
   </form>
   <div class="errors">
      @if ($errors->any())
         @foreach ($errors->all() as $error)
            <br><h4>{{ $error }}</h4><br>
         @endforeach
         
      @endif
   </div>   
@stop
