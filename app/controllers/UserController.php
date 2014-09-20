<?php

class UserController extends BaseController {

	// Nær í Auth user birtir info
	public function getIndex() {

		$user = Auth::user();

		return View::make('user.index')->with('user', $user);
	}

	// Ná í nýskráningar form
	public function getNyskraning() {

		return View::make('user.register');
	}	

	// Pósta nýskráningunni og setja user í DB
	public function postNyskraning() {

		$v = Validator::make(Input::all(), User::$rules);

		if ($v->fails()) {
			return Redirect::action('UserController@getNyskraning')->withInput()->withErrors($v);
		}

		User::create(array(
			'full_name' => Input::get('full_name'),
			'email' => Input::get('email'),
			'telephone' => Input::get('telephone'),
			'password' => Hash::make(Input::get('password'))
		));

		return Redirect::action('UserController@getIndex')->with('message', 'Notandi hefur verið búinn til.');
	}

	// Fá form til að uppfæra notanda
	public function getBreyta() {

		$user = Auth::user();

		return View::make('user.edit')->with('user', $user);
	}

	// Posta breyta forminu
	public function postBreyta() {

		$user = Auth::user();

		$v = Validator::make(Input::all(), User::$edit_rules);

		if ($v->fails()) {
			return Redirect::action('UserController@getBreyta')->withInput()->withErrors($v);
		}

		// Uppfæra upplýsingar
		$user->full_name = Input::get('full_name');
		$user->email = Input::get('email');
		$user->telephone = Input::get('telephone');
		$user->save();

		return Redirect::action('UserController@getIndex')->with('message', 'Notandi hefur verið uppfærður.');
	}

	// Fá form til að breyta lykilorði
	public function getBreytaLykilordi() {

		$user = Auth::user();

		return View::make('user.editpassword')->with('user', $user);
	}

	// Breyta lykilorðinu í DB
	public function postBreytaLykilordi() {

		$user = Auth::user();

		$v = Validator::make(Input::all(), User::$edit_password_rules);

		if ($v->fails()) {
			return Redirect::action('UserController@getBreytaLykilordi')->withErrors($v);
		}

		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return Redirect::action('UserController@getIndex')->with('message', 'Lykilorði hefur verið breytt.');
	}
}