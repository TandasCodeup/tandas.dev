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

		$newTanda = new Tanda;

		$newTanda->title = Input::get('title');
		$newTanda->user_num = Input::get('user_num');
		$newTanda->time_period = Input::get('time_period');
		$newTanda->payout = Input::get('payout');
		$newTanda->pay_per_user = $newTanda->payout / $newTanda->user_num;
		$newTanda->save();

		return Redirect::action('TandaController@show', $newTanda->id);

	}

	public function show($id) {

	}

	public function edit($id) {
		
	}

	public function destroy($id) {

	}

?>