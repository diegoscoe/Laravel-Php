<x-alert class="mb-4" type='Error' :message="$post->title" data_id='1' data_priority='medium'/>

<div {{$attributes->merge(['class'=>'my-5', 'other-atrr'=>'data1'])}}>
{{$changeTitle()}}
<h1>{{$post -> title}}</h1>
<p>{{$post -> created_at}}</p>
<p>{{$post -> content}}</p>
</div>