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
            <span>{{ $item->username }}</span>
            <br>
         @endforeach
      </div>
   @endif

   
   @if(isset($data))
      <h1>{{ $data->compatition_name }}</h1>
   @endif

   @isset($message)
   <div id="popupmessage" class="popup">
      <h2>Sorry {{ $message }} there is no competition currently</h2>
      <button type="submit" onclick="document.getElementById('popupmessage').style.display = 'none';">Close</button>   
   </div>
   @endisset

   @if (isset($winner_name))
   <div id="popupwinnername" class="popup">
      <h2>
         Congragulation u won : {{ $winner_name }}
      </h2>
      <button type="submit" onclick="document.getElementById('popupwinnername').style.display = 'none';">Close</button>
   </div>
   @endisset

   @if(isset($loser_name))
       <div id="popuplosername" class="popup">
          <h2>
             Sorry u lost : {{ $loser_name }}
          </h2>
          <button type="submit" onclick="document.getElementById('popuplosername').style.display = 'none';">Close</button>
       </div>
   @endisset
@stop

</div>


