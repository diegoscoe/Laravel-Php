@extends('dashboard.master')

@section('content')
    <a class=" my-2 btn  btn-success" href="{{route'category.create'}}" target="blank">Create</a>
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
                Options
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $c)
            <tr>
                <th>
                    {{$c->title}}
                </th>
                <th>
                    <a class="btn btn-primary mt-2" href="{{route('categories.show',$c)}}">Show</a>
                    <a class="btn btn-primary mt-2" href="{{route('categories.edit',$c)}}">Edit</a>
                    <form action="{{route('categories.destroy', $c)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger mt-2" type="submit">Delete</button>
                    </form>
                </th>
            </tr>
        </tbody>
    </table>

    {{$categoriess->links()}}
@endsection