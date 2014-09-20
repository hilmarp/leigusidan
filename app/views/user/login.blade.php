@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="small-12 columns">
			<h3>Innskráning</h3>

			{{ Form::open(array('action' => 'HomeController@postInnskraning')) }}

			<div @if ($errors->has('email')) class="error" @endif>
			{{ Form::label('email', 'Netfang') }}
			{{ Form::email('email', null, array('placeholder' => 'Sláðu inn netfang')) }}
			@if ($errors->has('email')) <small class="error">{{ $errors->first('email') }}</small> @endif
			</div>

			<div @if ($errors->has('password')) class="error" @endif>
			{{ Form::label('password', 'Lykilorð') }}
			{{ Form::password('password', array('placeholder' => 'Sláðu inn lykilorð')) }}
			@if ($errors->has('password')) <small class="error">{{ $errors->first('password') }}</small> @endif
			</div>

			{{ Form::submit('Innskrá', array('class' => 'button tiny')) }}

			{{ Form::close() }}
		</div>
	</div>

@stop