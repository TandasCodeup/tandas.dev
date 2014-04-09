<?php

	class UserController extends \BaseController {
		public function __construct() {
			parent::__construct();

			$this->beforeFilter('csrf', array('on' => array('post', 'delete', 'put')));
			$this->beforeFilter('auth', array('except' => 'store'));
			$this->beforeFilter('isAdmin', array('on' => 'index'));
		}
	}

	public function index() {
		$users = User::with('tandas')->orderBy('first_name', 'desc')->paginate(10);
		return View::make('userList')->with('users', $users);
	}

	public function store() {

		$assoc = array(
			'e1' => Input::get('email1'), 
			'e2' => Input::get('email2'),
			'p1' => Input::get('pass1'),
			'p2' => Input::get('pass2'));

		$newUser = new User;

		if ($assoc['e1'] == $assoc['e2']) {
			$newUser->email = $assoc['e1'];
		} else {
			Session::flash('loginFail', "The e-mail fields don't match");
			return Redirect::back()->withInput();
		}

		if ($assoc['p1'] == $assoc['p2']) {
			$newUser->password = Hash::make($assoc['p1']);
		} else {
			Session::flash('loginFail', "The password fields don't match");
			return Redirect::back()->withInput();
		}

		$newUser->first_name = Input::get('first_name');
		$newUser->last_name = Input::get('last_name');
		$newUser->gender = Input::get('gender');
		$newUser->DOB = Input::get('DOB');
		$newUser->save();

		return Redirect::action('DashController@show');
	}

	public function show($id) {

	}

	public function edit($id) {
		
	}

	public function destroy($id) {

	}

?>