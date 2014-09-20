<?php

class House extends Eloquent {

	protected $table = 'houses';

	public function user() {
		return $this->belongsTo('User');
	}

	public function zipcode() {
		return $this->hasOne('Zipcode');
	}
}