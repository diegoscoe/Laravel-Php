@extends('dashboard.master')

@section('content')
    <table>
        <thead>
            <tr>
                Title
            </tr>
                <tr>
                Posted
            </tr>
                <tr>
                Category
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $p)
            <tr>
                <td>
                    {{$p->title}}
                </td>
                <td>
                    {{$p->posted}}
                </td>
                <td>
                    {{$p->category->title}}
                </td>
            </tr>
        </tbody>
    </table>

    {{$posts->links()}}
@endsection