@extends('layout.app')

@section('title', 'Home')

@section('body')
	<br/>
	
	<div class="col-lg-6 col-lg-offset-3">
		<h1 class="text-center">Todo Lists</h1>
		@include('todo.partials.message')
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Title</th>
					<th>Body</th>
					<th>Date</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($todos as $todo)
					<tr>
				  		<td><a href="todo/{{$todo->id}}">{{$todo->title}}</a></td>
				  		<td>{{$todo->body}}</td>
				  		<td>{{$todo->created_at->diffForHumans()}}</td>
				  		<td>
				  			<a href="todo/{{$todo->id}}/edit" class="btn btn-primary">
				  				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				  			</a>

				  			<form action="todo/{{$todo->id}}" method="POST" class="form-group pull-right">
				  				{{csrf_field()}}
				  				{{method_field('DELETE')}}
				  				<button type="submit" class="btn btn-danger">
				  					<i class="fa fa-trash-o" aria-hidden="true"></i>
				  				</button>
				  			</form>
				  		</td>
				  	</tr>
				@endforeach
			</tbody>
		</table>

		</ul>
	</div>
	<div class="clearfix"></div>
	<div class="col-lg-12 text-center">
		<a href="todo/create" class="btn btn-info ">Add New</a>
	</div>
@endsection