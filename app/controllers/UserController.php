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

	}

	public function show($id) {

	}

	public function edit($id) {
		
	}

	public function destroy($id) {

	}

?>