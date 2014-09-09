<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Client extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clients';

	protected $fillable = [
			'first_name', 
			'last_name', 
			'company_name',
			'email',
			'address1', 
			'address2',
			'city',
			'state_id',
			'zip',
			'phone1',
			'phone2'
	];
	
	private static $rules = [
			'first_name'    => 'required',
			'last_name'     => 'required',
			'address1'		=> 'required',
			'city'			=> 'required',
			'state_id'		=> 'required',
			'zip'			=> 'required',
			'phone1'		=> 'required'
// 			'lastname'      => 'required|email',
// 			'nerd_level' => 'required|numeric'	
	];
	
	public $messages;
	
	public function state() {
		return $this->belongsTo('State');
	}
	
	public function isValid() {
		$validation = Validator::make($this->attributes, static::$rules);
		
		if ( $validation->passes() ) {
			return true;
		}
		
		$this->messages = $validation->messages();
		
		return false;
	}
}
