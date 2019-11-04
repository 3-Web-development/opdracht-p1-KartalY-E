@extends('layouts.default')

@section('content')
   @if (isset($winners))   
      <div>
         <h4>{{ $current_comp }}</h4>
         @foreach ($winners as $item)
            <li>{{ $item->username }}</li>
      @endforeach
      </div>
   @endif
   <div>
      <h2>Welcome</h2>
      <p>Scan any QR code u get with our new collection AND WIN every item of our NEW COLLECTION</p>
   </div>
   <div>
         <a href="/scan"><button a href="/scan">SCAN</button></a>
   </div>
   @if(isset($data))
      <h1>{{ $data->compatition_name }}</h1>
   @endif

   @if (isset($winner_name))
   <div>

      <h2>
         Congragulation u won : {{ $winner_name }}
      </h2>
   </div>
   @endisset
   @if(isset($loser_name))
       <div>
          <h2>
             Sorry u lost : {{ $loser_name }}
          </h2>
       </div>
   @endisset
@stop
