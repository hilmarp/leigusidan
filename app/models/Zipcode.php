<?php

class Zipcode extends Eloquent {

	protected $table = 'zipcodes';

	public function house() {
		return $this->belongsTo('House');
	}
}