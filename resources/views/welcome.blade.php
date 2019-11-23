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

   @if (isset($winners))   
      <div class="winners">
         <h4>winners of the current competition :&nbsp;{{ $current_comp }}</h4>
         @foreach ($winners as $item)
            <li>{{ $item->username }}</li>
         @endforeach
      </div>
   @endif
</div>



   @if(isset($data))
      <h1>{{ $data->compatition_name }}</h1>
   @endif

   @isset($message)
   <div>
   <h1>Sorry {{ $message }} there is no competition currently</h1>
   </div>
   @endisset

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
