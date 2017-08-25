@extends('layouts.admin')


@section('content')
  
  <h1>Edit User</h1>
  <div class="row">
    <div class="col-sm-3">
      <img src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/350x150'}}" class="img-responsive img-rounded"></img>
    </div>
    <div class="col-sm-9">    
      {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files' => true]) !!}
        {{ csrf_field() }}
        <div class="form-group">
          {!! Form::label('name', 'Name') !!}
          {!! Form::text('name', $user->name, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('email', 'Email Address') !!}
          {!! Form::email('email', $user->email, ['class'=>'form-control']) !!}
          </div>
        <div class="form-group">
          {!! Form::label('role_id', 'Role') !!}
          {!! Form::select('role_id', $roles, null , ['class'=>'form-control']) !!}   
        </div>
        <div class="form-group">
          {!! Form::label('is_active', 'Status') !!}
          {!! Form::select('is_active', ['0' => 'Not Active','1' => 'Active'], null, ['class'=>'form-control']) !!}    
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
    </div> 
  </div>

  <div class="row">
    @include('includes.form_error')
  </div>
@endsection