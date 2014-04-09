<?php

class DashController extends \BaseController {

	public function show($id) {

		$user = User::find($id);

		return View::make('user.dash')->with('user', $user);
	}

	public function edit($id) {

		$user = User::find($id);

		return View::make('user.dashEdit')->with('user', $user);
	}

	public function update($id) {
		
	}

}