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
		$tandas = Tanda::with('users')->orderBy('created_at', 'desc')->paginate(10);
		return View::make('tandaList')->with('tandas', $tandas);
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