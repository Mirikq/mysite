@extends('layouts.app')
@section('content')
	
	<h1>{{ $data->title }}</h1>
	<img src="images/{{ $data->img }}">
	<p>
	{!! $data->content !!}
	
	<h1>Последние новости:<h1>
	
	@for ($i =0; $i < 3; $i++)
		<h2>{{$attachdata[$i]->title}}</h2>
		<img src="images/asset/{{$attachdata[$i]->img}}">
		<p>
			{{ $attachdata[$i]	->content }}
			
		</p>
	@endfor
	
	<h1>Пара записей из блога</h1>
	
	@for ($i =0; $i < 3; $i++)
		<h2>{{$attachdata2[$i]->title}}</h2>
		@if(isset($attachdata2[$i]->img))
			<img src="images/asset/{{$attachdata2[$i]->img}}"> 
		@endif
		<p>
			{!! $attachdata2[$i]	->content !!}
			
		</p>
	@endfor
@endsection