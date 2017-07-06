@extends('layout.app')

@section('title', 'Edit Selected Item')

@section('body')
<br />
<div class="col-lg-6 col-lg-offset-3">
	<h1 class="text-center">Edit {{$item->title}}</h1>
	<form class="form-horizontal" action="{{url('todo/'.$item->id)}}" method="POST">
		{{csrf_field()}}
		{{method_field('PUT')}}
	  <fieldset>
	    <div class="form-group">
	      <div class="col-lg-10">
	      	<input type="text" name="title" class="form-control" value="{{$item->title}}" placeholder="Enter Title">
	      	<br>
	        <textarea class="form-control" name="body" rows="5" id="textArea" value="{{$item->body}}" placeholder="Enter Body">{{$item->body}}</textarea>
	        <br>
	        <a href="/todo" class="btn btn-primary">Back</a>
	        <button type="submit" class="btn btn-success">Submit</button>
	      </div>
	    </div>
	  </fieldset>
	</form>
	@include('todo.partials.errors')

		
</div>

@endsection