@extends('web.layout')

@section('content')
    <h1>List</h1>
    <x-web.blog.index :posts="$posts" class="bg-red-100" other-atrr="data2>
    </x-web.blog.index>
@endsection