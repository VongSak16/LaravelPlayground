
@foreach($data as $item)
    {{$loop->index}} {{$item['title'] .' '. $item['price']}}
    
    <br>
@endforeach