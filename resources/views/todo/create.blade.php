@extends('layout.app')

@section('title', 'Create Item')

@section('body')
	<br />
	
	<div class="col-lg-4 col-lg-offset-4">
		<h1>Create New Item</h1>
		<form class="form-horizontal" action="/todo" method="POST">
		{{csrf_field()}}
		  <fieldset>
		    <div class="form-group">
		      <div class="col-lg-10">
		      	<input type="text" name="title" class="form-control" placeholder="Enter Title">
		      	<br>
		        <textarea class="form-control" name="body" rows="5" id="textArea" placeholder="Enter Body"></textarea>
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