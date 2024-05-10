Hello {{$title}} 
<br>
Output:<br>
{{$product}}({{$dis}}%) {{$qty}} x {{$amount}} = 
{{$qty * $amount - ($qty * $amount * $dis / 100)}}

<br>
@if($amount > 1000)
    It's expensive
@elseif($amount < 1000)
    It's cheap
@else
    It's normal
@endif
<br>
==================
<br>
@php

    $namep = 'Hello Setec';
    echo($namep);
@endphp
<br><br>

@for($i=1; $i<=10; $i++)
    @if($i%2 ==0)
      <font color="red">  Number: {{$i}} <br></font>
    @else
        Number: {{$i}} <br>
    @endif
@endfor
