<?php

class HomeController extends BaseController {

	// Birta innskráningarformið
	public function getInnskraning() {

		return View::make('user.login');
	}

	// Skrá notanda inn í kerfið
	public function postInnskraning() {

		$v = Validator::make(Input::all(), User::$login_rules);

		if ($v->fails()) {

			return Redirect::action('HomeController@getInnskraning')->withInput()->withErrors($v);

		} else {

			if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {

				return Redirect::action('UserController@getIndex')->with('message', 'Notandi hefur verið skráður inn.');

			} else {

				return Redirect::action('HomeController@getInnskraning')->with('message', 'Netfang eða lykilorð var ekki rétt.')->withInput();

			}

		}
	}

	// Útskrá notanda
	public function getUtskraning() {

		Auth::logout();

		return Redirect::action('HomeController@getInnskraning')->with('message', 'Notandi hefur verið skráður út.');
	}

}
