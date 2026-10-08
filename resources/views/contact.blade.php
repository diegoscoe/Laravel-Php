@extends('master')

@section('contect')
    <h1>Contact1</h1>
    <p>{{$name}}</p>

    @if($name != "diego")
    Tu nombre no es diego
    @else
    <h2>Tu nombre es diego<h2/>
    @endif

    <ul>
    @foreach ([1,2,3,4,5] as $item)
    <li>{{$item}}</li>
    @endforeach
</ul>
@endsection