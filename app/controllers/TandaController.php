<?php

	class TandaController extends \BaseController {
		public function __construct() {
			parent::__construct();

			$this->beforeFilter('csrf', array('on' => array('post', 'delete', 'put')));
			$this->beforeFilter('auth');
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