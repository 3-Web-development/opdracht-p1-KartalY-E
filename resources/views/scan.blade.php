@extends('layouts.default')

@section('content')
   i am the scan page

   <form action="/scan" method="POST">
      {{ csrf_field() }}

   <input type="text" name="username" placeholder="username" value="{{ old('username') }}" required>
      <input type="email" name="email" placeholder="email" value="{{ old('email') }}" required>
      <input type="text" name="address" placeholder="address" value="{{ old('address') }}" required>
      <input type="text" name="city" placeholder="city" value="{{ old('city') }}" required>
      <button type="submit">Submit</button>
   
   </form>
   <div class="errors">
      @if ($errors->any())
         @foreach ($errors->all() as $error)
            <span>{{ $error }}</span><br>
         @endforeach
         
      @endif
   </div>   
@stop
