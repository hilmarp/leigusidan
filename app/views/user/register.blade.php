@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="small-12 columns">
			<h3>Nýskráning</h3>

			{{ Form::open(array('action' => 'UserController@postNyskraning')) }}

			<div @if ($errors->has('full_name')) class="error" @endif>
			{{ Form::label('full_name', 'Fullt nafn') }}
			{{ Form::text('full_name', null, array('placeholder' => 'Sláðu inn fullt nafn')) }}
			@if ($errors->has('full_name')) <small class="error">{{ $errors->first('full_name') }}</small> @endif
			</div>

			<div @if ($errors->has('email')) class="error" @endif>
				{{ Form::label('email', 'Netfang') }}
				{{ Form::email('email', null, array('placeholder' => 'Sláðu inn netfang')) }}
				@if ($errors->has('email')) <small class="error">{{ $errors->first('email') }}</small> @endif
			</div>

			<div @if ($errors->has('telephone')) class="error" @endif>
			{{ Form::label('telephone', 'Símanúmer') }}
			{{ Form::text('telephone', null, array('placeholder' => 'Sláðu inn símanúmer')) }}
			@if ($errors->has('telephone')) <small class="error">{{ $errors->first('telephone') }}</small> @endif
			</div>
			
			<div @if ($errors->has('password')) class="error" @endif>
			{{ Form::label('password', 'Lykilorð') }}
			{{ Form::password('password', array('placeholder' => 'Sláðu inn lykilorð')) }}
			@if ($errors->has('password')) <small class="error">{{ $errors->first('password') }}</small> @endif
			</div>

			<div @if ($errors->has('password_confirmation')) class="error" @endif>
			{{ Form::label('password_confirmation', 'Lykilorð aftur') }}
			{{ Form::password('password_confirmation', array('placeholder' => 'Sláðu inn sama lykilorð aftur')) }}
			@if ($errors->has('password_confirmation')) <small class="error">{{ $errors->first('password_confirmation') }}</small> @endif
			</div>

			{{ Form::submit('Nýskrá', array('class' => 'button tiny')) }}

			{{ Form::close() }}
		</div>
	</div>

@stop