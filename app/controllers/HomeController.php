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

	public function showHome()
	{
		return View::make('home');
	}

	public function doLogin() {
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
			// user is logged in
			// This route is a filler, can be replaced with anything.
			Session::flash('loginSucc', 'Login successful');
			return Redirect::intended('/whatever_route_to_get_to_dashboard');
		} else {
			Session::flash('loginFail', 'Login failed');
			// user not logged in
			return Redirect::back()->withInput();
		}
	}

	public function logout() {
		Auth::logout();
		return Redirect::action('HomeController@showHome');
	}

}