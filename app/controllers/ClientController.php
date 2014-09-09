<?php

class ClientController extends \BaseController {

	protected $client;
	
	public function __construct(Client $client) {
		$this->client = $client;
		
		$this->beforeFilter('auth', array('except' => 'getLogin'));
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = $this->client->all();
		
		return View::make('clients.index', ['clients' => $clients]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('clients.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		if ( ! $this->client->fill($input)->isValid() ) {
			return Redirect::back()->withInput()->withErrors($this->client->messages);
		}
		
		// store
		$this->client->save();

		// redirect
		Session::flash('message', 'Successfully created Client!');
		return Redirect::route('clients.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// get the nerd
		$client = $this->client->find($id);

		// show the view and pass the nerd to it
		return View::make('clients.show', ['client' => $client]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
		$client = $this->client->find($id);
		
		// show the edit form and pass the nerd
		return View::make('clients.edit', ['client' => $client]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$client = $this->client->find($id);
		$input = Input::all();
		
		if ( ! $client->fill($input)->isValid() ) {
			return Redirect::back()->withInput()->withErrors($this->client->messages);
		}
		
		// store
		$client->save();
// 		$client->first_name	= Input::get('first_name');
// 		$client->last_name  = Input::get('last_name');
// 		$client->save();

		// redirect
		Session::flash('message', 'Successfully updated Client!');
		return Redirect::route('clients.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		$client = $this->client->find($id);
		$client->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the Client!');
		return Redirect::route('clients.index');
	}

}
