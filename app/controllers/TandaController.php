<?php

	class TandaController extends \BaseController {
		public function __construct() {
			parent::__construct();

			$this->beforeFilter('auth');
			$this->beforeFilter('isAdmin', array('on' => 'index'));
		}

		public function index() {
			$tandas = Tanda::with('users')->orderBy('created_at', 'desc')->paginate(10);
			return View::make('tandaList')->with('tandas', $tandas);
		}

		public function store() {
	
			$newTanda = new Tanda;
	
			$newTanda->title = Input::get('title');
			$newTanda->user_num = Input::get('user_num');
			$newTanda->time_period = 2;
	
			$payout = str_split(Input::get('payout'));
			if ($payout[0] == '$') {
				unset($payout[0]);
				$newTanda->payout = implode($payout);
			} else {
				$newTanda->payout = Input::get('payout');
			}
	
			$newTanda->pay_per_user = $newTanda->payout / $newTanda->user_num;
			$newTanda->save();
	
			$pivot = new Pivot;
			$pivot->user_id = Auth::user()->id;
			$pivot->tanda_id = $newTanda->id;
			$pivot->save();
			
			return Redirect::action('UserController@show', Auth::user()->id);
	
		}
	
		// public function show($id) {
	
		// 	$tanda = Tanda::find($id);
	
		// 	return View::make('tanda.tanda')->with('tanda', $tanda);
	
		// }
	
		public function update($id) {
	
			$pivot = new Pivot;
			$pivot->user_id = Auth::user()->id;
			$pivot->tanda_id = $id;
			$pivot->save();
	
			$tanda = Tanda::with('users')->find($id);
			if (count($tanda->users) == $tanda->user_num) {
				$tanda->begun = true;
				date_default_timezone_set('America/Chicago');
				$tanda->began_at = date('Y-m-d H:i:s');
				$tanda->save();
				$weeks = 0;
				foreach ($tanda->users as $user) {
					$payout = new Payment;
					$payout->payment_amnt = null;
					$payout->payout_amnt = $tanda->payout;
					if ($weeks == 0 || $weeks == 1) {
						$payout->date_req = date('Y-m-d H:i:s', strtotime("+{$weeks} week"));
					} else {
						$payout->date_req = date('Y-m-d H:i:s', strtotime("+{$weeks} weeks"));
					}
					$payout->user_id = $user->id;
					$payout->tanda_id = $tanda->id;
					$payout->save();

					foreach($tanda->users as $theUser) {
						$payment = new Payment;
						$payment->payment_amnt = $tanda->pay_per_user;
						$payment->payout_amnt = null;
						if ($weeks == 0 || $weeks == 1) {
							$payment->date_req = date('Y-m-d H:i:s', strtotime("+{$weeks} week"));
						} else {
							$payment->date_req = date('Y-m-d H:i:s', strtotime("+{$weeks} weeks"));
						}
						$payment->user_id = $theUser->id;
						$payment->tanda_id = $tanda->id;
						$payment->save();
					}

					$weeks++;
				}
			}
	
			return Redirect::back();
		}
	
		public function destroy($id) {
	
			$tanda = Tanda::find($id);
			$tanda->delete();
		}

}

?>