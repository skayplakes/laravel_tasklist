@extends('../layouts/app')

@section('content')

	<div class="container">
	  <form class="form-horizontal" method="POST" action={{ url('addTask') }}>

	  {{ csrf_field() }}

	  	@if(Session::has('message'))
			<div class="alert alert-success">{{ Session::get('message') }}</div>
		@endif

	  	<div class="panel panel-default">
		  <div class="panel-heading">New Task</div>

		  <div class="panel-body">
		  	<div class="col-sm-2">
		  		<label class="control-label col-sm-2">Task:</label>
		  	</div>
		  	<div class="col-sm-3">
			  	<input type="text" class="form-control" name="taskName">
			</div>

			<div class="col-sm-5">
		  		<input type="text" class="form-control" name="taskDesc">
		  	</div>

		  	<div class="container-fluid col-sm-5">
		  		@if(Auth::user() && Auth::user()->role == 'admin')
			  		<a href='#'><input class="btn btn-default" type="submit" name="addTask" value="Add Task"></a>
			  	@endif
		  	</div>	
		  </div>
		</div>

	  </form> 
	</div>

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">Current Tasks</div>

			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<th>Name</th>
						<th>Description</th>
					</thead>
					<tbody>
					@foreach($new_task as $tasks)
						<tr>
							<td>{{ $tasks->name }}</td>
							<td>{{ $tasks->description }}</td>
							@if(Auth::user() && Auth::user()->role == 'admin')
								<td><a href='{{ url("/homes/delete/$tasks->id") }}'><button class="btn btn-danger">Delete</button></a></td>
							@endif
						</tr>
					@endforeach	
					</tbody>
				</table>
			</div>
		</div>
	</div>


@endsection
