@extends('layouts.default')

@section('title')
	Create a Client
@stop

@section('content')

	<h1>Create a Client</h1>
	
	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}
	
	{{ Form::open(array('url' => 'clients')) }}
	
		<div class="form-group">
			{{ Form::textField('first_name', 'First Name', true, Input::old('first_name'), array('required' => 'required', 'class' => 'form-control')) }} 
		</div>
	
		<div class="form-group">
			{{ Form::textField('last_name', 'Last Name', true, Input::old('last_name'), array('required' => 'required', 'class' => 'form-control')) }} 
		</div>
	
		<div class="form-group">
			{{ Form::textField('company_name', 'Company Name', false, Input::old('company_name'), array('class' => 'form-control')) }} 
		</div>
	
		<div class="form-group">
			{{ Form::textField('email', 'Email', false, Input::old('email'), array('class' => 'form-control')) }} 
		</div>
	
		<div class="form-group">
			{{ Form::textField('address1', 'Address 1', true, Input::old('address1'), array('required' => 'required', 'class' => 'form-control')) }} 
		</div>
	
		<div class="form-group">
			{{ Form::textField('address2', 'Address 2', false, Input::old('address2'), array('class' => 'form-control')) }} 
		</div>
	
		<div class="form-group">
			{{ Form::textField('city', 'City', true, Input::old('city'), array('required' => 'required', 'class' => 'form-control')) }} 
		</div>
	
		<div class="form-group">
			{{ Form::selectField('state_id', 'State', true, State::Select('--Select a State--'), Input::old('state_id'), array('required' => 'required', 'class' => 'form-control')) }}
		</div>
		
		<div class="form-group">
			{{ Form::textField('zip', 'Zip', true, Input::old('zip'), array('required' => 'required', 'class' => 'form-control')) }} 
		</div>
	
		<div class="form-group">
			{{ Form::textField('phone1', 'Phone 1', true, Input::old('zip'), array('required' => 'required', 'class' => 'form-control')) }} 
		</div>
	
		<div class="form-group">
			{{ Form::textField('phone2', 'Phone 2', false, Input::old('zip'), array('class' => 'form-control')) }} 
		</div>
		
		{{ Form::submit('Create the Client!', array('class' => 'btn btn-primary')) }}
	
	{{ Form::close() }}

@stop