<?php

	class UserController extends \BaseController {
		public function __construct() {
			parent::__construct();

			$this->beforeFilter('auth', array('except' => 'store'));
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