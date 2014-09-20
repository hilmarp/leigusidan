@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="small-12 columns">
			<h3>Uppfæra notanda</h3>

			{{ Form::model($user, array('action' => array('UserController@postBreyta', $user->id))) }}

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

			{{ Form::submit('Vista', array('class' => 'button tiny')) }}

			{{ Form::close() }}

			<a href="{{ URL::action('UserController@getBreytaLykilordi') }}">Breyta lykilorði</a>
		</div>
	</div>

@stop