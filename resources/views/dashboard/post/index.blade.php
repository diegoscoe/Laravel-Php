@extends('dashboard.master')

@section('content')
    <a class="btn btn-success my-3" href="{{route('post.create')}}" target="blank">Create</a>
    <table class="table mb-3">
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
                    <a class="my-2 btn btn-primary" href="{{route('post.show',$p)}}">Show</a>
                    <a class="my-2 btn btn-primary" href="{{route('post.edit',$p)}}">Edit</a>
                    <form class="btn" action="{{route('post.destroy', $p)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="my-2 btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$posts->links()}}
@endsection