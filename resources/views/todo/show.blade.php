@extends('layout.app')

@section('title', 'Show Selected Item')

@section('body')
	<br/>
	<div class="col-lg-offset-4 col-lg-4 text-center">
		
		<h1>{{$item->title}}</h1>
		<p>{{$item->body}}</p>

		<a href="/todo" class="btn btn-primary">Go Back</a>
	</div>
@endsection