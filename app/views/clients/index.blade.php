@extends('layouts.default')

@section('title')
	Clients
@stop

@section('content')

	<h1>All Clients</h1>
	
	<!-- will be used to show any messages -->
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Address</td>
				<td>City</td>
				<td>Phone1</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
		@foreach($clients as $key => $value)
			<tr>
				<td>{{ $value->id }}</td>
				<td>{{ $value->first_name }}</td>
				<td>{{ $value->last_name }}</td>
				<td>{{ $value->address1 }}</td>
				<td>{{ $value->city }}</td>
				<td>{{ $value->phone1 }}</td>
	
				<!-- we will also add show, edit, and delete buttons -->
				<td>
	
					<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
					<a class="btn btn-small btn-success" href="{{ URL::to('clients/' . $value->id) }}">View Cient</a>
	
					<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
					<a class="btn btn-small btn-info" href="{{ URL::to('clients/' . $value->id . '/edit') }}">Edit Client</a>
	
					<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
					<!-- we will add this later since its a little more complicated than the other two buttons -->
					{{ Form::open(array('url' => 'clients/' . $value->id, 'class' => 'pull-right')) }}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Delete this Client', array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}
					
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	
@stop

