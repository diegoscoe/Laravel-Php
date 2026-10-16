@extends('web.layout')

@section('content')
    <h1>List</h1>
    <x-web.blog.index :posts="$posts">
        <h1>Listado principal de post</h1>
        @slot('header')
        <h1>Listado principal de post -- slot con nombre</h1>
        @endslot

        @slot('footer')
        <footer>
            pie de pagina
        </footer>
        @endslot

        @slot('extra', 'Extra')
        Extra
        @endslot
    </x-web.blog.index>
@endsection