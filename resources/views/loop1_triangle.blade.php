<style>
    body {
        font-family: 'Consolas';
    }
</style>

Output Loop:
<br>

@php
    $n = 20;
@endphp

@for ($i = 1; $i <= $n; $i++)
    @for ($j = $i; $j >= 1; $j--)
        @if ($j + $i == $n * 2)
            <font color="black">$</font>
        @elseif ($j % 3 == 0)
            <font color="blue">o</font>
        @elseif ($j % 3 == 1)
            <font color="red">x</font>
        @elseif ($j % 3 == 2)
            <font color="green">8</font>
        @endif
    @endfor
    <br>
@endfor
