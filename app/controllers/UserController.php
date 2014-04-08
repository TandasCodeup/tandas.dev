<?php

	class UserController extends \BaseController {
		public function __construct() {
			parent::__construct();

			$this->beforeFilter('auth', array('except' => 'store'));
			$this->beforeFilter('isAdmin', array('on' => 'index'));
		}
	}

	public function index() {

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