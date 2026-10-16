@extends('web.layout')

@section('content')
<x-alert class="mb-4" type='Error' :message="$post->title" data_id='1' data_priority='medium'/>
    <x-web.blog.index :posts="$posts" class="bg-red-100" other-atrr="data2">
    </x-web.blog.index>
    <h3>Dinamico</h3>
    <x-dynamic-component component='alert' type='Error' :message="$post->title" data_id='1' data_priority='medium'/>
@endsection