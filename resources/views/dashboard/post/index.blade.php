@extends('dashboard.master')

@section('content')
    <a href="{{route('post.create')}}" target="blank">Create</a>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Title
                </th>
                <th>
                Posted
            </th>
                <th>
                Category
            </th>
            <th>
                Options
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $p)
            <tr>
                <th>
                    {{$p->title}}
                </th>
                <th>
                    {{$p->posted}}
                </th>
                <th>
                    {{$p->category->title}}
                </th>
                <th>
                    <a href="{{route('post.show',$p)}}">Show</a>
                    <a href="{{route('post.edit',$p)}}">Edit</a>
                    <form action="{{route('post.destroy', $p)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$posts->links()}}
@endsection