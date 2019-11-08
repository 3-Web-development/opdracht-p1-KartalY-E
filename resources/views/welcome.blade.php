@extends('layouts.default')

@section('content')

<div class="main">
   <div class="info">
      <p>Win a new bag</p>
      <a href="/scan">
         <button a href="/scan">Enter your code</button>
      </a>
   </div>
   <div class="lv_img1">
      <img src="images/lv_img1.png" alt="bag img1">
   </div>
</div>
<div class="main2">

   @if (empty($winners) and (empty($current_comp)))   
      <div class="lv_img2">
         <img src="images/lv_img2.png" alt="bag img2">
      </div>
      <div class="winners">
         <h4>current competition :{{ $current_comp }}</h4>
         @foreach ($winners as $item)
            <li>{{ $item->username }}</li>
         @endforeach
      </div>
   @else

   <hr>

   
   @endif
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
