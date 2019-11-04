@extends('layouts.default')

@section('content')
<div>
   @if ($winners)
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
@stop
