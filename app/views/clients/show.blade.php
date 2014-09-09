@extends('layouts.default')

@section('title')
	View Client
@stop

@section('content')

	<h1>Showing {{ $client->first_name }}</h1>
	
	<div class="jumbotron">
		<p>
			<strong>First Name:</strong> {{ $client->first_name }}<br>
			<strong>Last Name:</strong> {{ $client->last_name }}<br>
			<strong>Company:</strong> {{ $client->company_name }}<br>
			<strong>Email:</strong> {{ $client->email }}<br>
			<strong>Address 1:</strong> {{ $client->address1 }}<br>
			<strong>Address 2:</strong> {{ $client->address2 }}<br>
			<strong>City:</strong> {{ $client->city }}<br>
			<strong>State:</strong> {{ $client->state->name }}<br>
			<strong>Zip:</strong> {{ $client->zip }}<br>
			<strong>Phone 1:</strong> {{ $client->phone1 }}<br>
			<strong>Phone 2:</strong> {{ $client->phone2 }}<br>
		</p>
	</div>

@stop
