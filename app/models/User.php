<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $fillable = array('full_name', 'email', 'password', 'telephone');

	public static $rules = array(
		'full_name' => 'required',
		'email' => 'required|email',
		'password' => 'required|confirmed',
		'password_confirmation' => 'required',
		'telephone' => 'required',
		'admin' => 'boolean'
	);

	public static $login_rules = array(
		'email' => 'required|email',
		'password' => 'required'
	);

	public static $edit_rules = array(
		'full_name' => 'required',
		'email' => 'required|email',
		'telephone' => 'required'
	);

	public static $edit_password_rules = array(
		'password' => 'required|confirmed',
		'password_confirmation' => 'required'
	);

	public function houses() {
		return $this->hasMany('House');
	}

}
