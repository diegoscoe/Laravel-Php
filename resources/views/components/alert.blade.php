@proprs(['type' => 'info','message'])

<div {{$attributes->merge(['class'=> 'alert alert-'.$type])}}>
    {{$message}}</div>

    <ul>
        <li>
            whereStarstwith:{{$attributes->whereStarstwith('data')}}
        </li>
        <li>
            whereDoesntStarstwith:{{$attributes->whereDoesntStarstwith('data')}}
        </li>
        <li>
            has:{{$attributes->has('data')}}
        </li>
        <li>
            get:{{$attributes->get('data')}}
        </li>
        <li>
            filter:{{$attributes->filter(fn(string $value, string $key)=>$key == 'data_id')}}
        </li>
    </ul>