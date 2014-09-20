@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="small-12 columns">
			<h3>Breyta lykilorði</h3>

			{{ Form::model($user, array('action' => array('UserController@postBreytaLykilordi', $user->id))) }}

			<div @if ($errors->has('password')) class="error" @endif>
			{{ Form::label('password', 'Nýtt lykilorð') }}
			{{ Form::password('password', array('placeholder' => 'Sláðu inn nýtt lykilorð')) }}
			@if ($errors->has('password')) <small class="error">{{ $errors->first('password') }}</small> @endif
			</div>

			<div @if ($errors->has('password_confirmation')) class="error" @endif>
			{{ Form::label('password_confirmation', 'Nýtt lykilorð aftur') }}
			{{ Form::password('password_confirmation', array('placeholder' => 'Sláðu inn sama lykilorð aftur')) }}
			@if ($errors->has('password_confirmation')) <small class="error">{{ $errors->first('password_confirmation') }}</small> @endif
			</div>

			{{ Form::submit('Vista', array('class' => 'button tiny')) }}

			{{ Form::close() }}
		</div>
	</div>

@stop