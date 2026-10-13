@extends('dashboard.master')

@section('content')

    @include('dashboard.fragment._errors-form')
    <form action="{{route('post.update', $post->id)}}" method="post">

    @method('PATCH')


    @csrf

    <label for="">Title</label>
    <input type="text" name="title" value="{{$post->title}}">

        <label for="">Slug</label>
    <input type="text" name="slug" value="{{$post->title}}">

    <label for="">Content</label>
    <textarea name="content">{{$post->content}}</textarea>

    <label for="">Category</label>
    <select name="category_id" >
        @foreach($categories as $id => $title)
        <option {{$post->category->id ==$id ? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
        @endforeach
    </select>

    <label for="">Description</label>
    <textarea name="description">{{$post->description}}</textarea>

        <label for="">Posted</label>
    <select name="posted" >
        <option {{$post->posted == 'not' ? 'selected' : ''}} value="yes">Yes</option>
        <option {{$post->posted == 'yes' ? 'selected' : ''}} value="not">No</option>
    </select>



        <button type="submit">Send</button>
    </form>
@endsection