@extends('layouts.admin')


@section('content')
	
	<h1>Add User</h1>
	{!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files' => true]) !!}
		{{ csrf_field() }}
		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Email Address') !!}
			{!! Form::email('email', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('role_id', 'Role') !!}
			{!! Form::select('role_id', [
				'' => 'Choose Options'] + $roles, null , ['class'=>'form-control']) !!}		
		</div>
		<div class="form-group">
			{!! Form::label('is_active', 'Status') !!}
			{!! Form::select('is_active', ['0' => 'Not Active','1' => 'Active'], 0, ['class'=>'form-control']) !!}		
		</div>
		<div class="form-group">
			{!! Form::label('photo_id', 'Upload a File') !!}
			{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}		
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password_confirmation', 'Confirm Password') !!}
			{!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
				{!! Form::submit('Add User' , ['class'=>'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

	@include('includes.form_error')

@endsection