@extends('dashboard.master')

@section('content')
    <a href="{{route'category.create'}}" target="blank">Create</a>
    <table>
        <thead>
            <tr>
                <td>
                    Id
                </td>
                <td>
                    Title
                </td>
            <td>
                Options
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $c)
            <tr>
                <td>
                    {{$c->title}}
                </td>
                <td>
                    <a href="{{route('categories.show',$c)}}">Show</a>
                    <a href="{{route('categories.edit',$c)}}">Edit</a>
                    <form action="{{route('categories.destroy', $c)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    {{$categoriess->links()}}
@endsection