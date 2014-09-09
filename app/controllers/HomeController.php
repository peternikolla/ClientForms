<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	protected $user;
	
	public function __construct(User $user) {
		$this->user = $user;
	}
		
	public function showWelcome()
	{
		return View::make('hello');
	}
	
	public function showLogin()
	{
		// show the form
		return View::make('login');
	}
	
	public function doLogin()
	{
		$input = Input::all();
		
		if ( ! $this->user->fill($input)->isValid() ) {
			return Redirect::back()->withInput()->withErrors($this->user->messages);
		} else {

			// create our user data for the authentication
			$userdata = array(
				'username' 	=> $input['username'],
				'password' 	=> $input['password']
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::route('clients.index');
			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('login')
					->withErrors(array('password' => 'Invalid username/password'))
					->withInput(Input::except('password'));

			}

		}
	}	

	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}
}
