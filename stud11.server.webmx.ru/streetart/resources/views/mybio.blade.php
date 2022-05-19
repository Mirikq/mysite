@extends('layouts.app')

@section('content')
	
	<h1>{{ $data->title }}</h1>
	<p>
	{!! $data->content !!}

	@foreach ($attachdata as $item)
		<h2>{{ $item->title }} </h2>
		@if(isset($item->img))
			<img src="images/asset/{{$item->img}}"> 
		@endif
		<p>{!! $item->content !!}</p>
	@endforeach	
	
@endsection