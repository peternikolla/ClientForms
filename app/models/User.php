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

	protected $fillable = ['username', 'password'];
	
	public static $rules = [
			'username'    => 'required',
			'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
	];
	
	public $messages;
	
	public function isValid() {
		$validation = Validator::make($this->attributes, static::$rules);
	
		if ( $validation->passes() ) {
			return true;
		}
	
		$this->messages = $validation->messages();
	
		return false;
	}
}
