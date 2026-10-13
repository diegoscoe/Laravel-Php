@extends('dashboard.master')

@section('content')

    @include('dashboard.fragment._errors-form')
    <form action="{{route('category.update', $category->id)}}" method="post">

    @method('PATCH')
    @include('dashboard.post._form', ['task'=> 'edit'])



@endsection