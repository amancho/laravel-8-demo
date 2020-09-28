<h1>{{$title}}</h1>

<ul>
@foreach ($elements as $element)
    <p>This is element {{ $element }}</p>
@endforeach
</ul>
