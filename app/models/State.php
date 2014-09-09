<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class State extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'states';

	public function client() {
		return $this->hasOne('Client');
	}
	
	public function scopeSelect($query, $title) {
		$stateVals[''] = $title;
		$stateVals += $this->orderBy('name')
			->get(array('id', DB::raw('CONCAT(abbr, " - ", name) AS full_name')))
			->lists('full_name', 'id');
		
		return $stateVals;
	}
}
