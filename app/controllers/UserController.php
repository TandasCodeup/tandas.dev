<?php

	class UserController extends \BaseController {
		public function __construct() {
			parent::__construct();

			$this->beforeFilter('auth', array('except' => 'store'));
			$this->beforeFilter('isAdmin', array('on' => 'index'));
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
		$newUser->save();

		Auth::login(User::find($newUser->id));

		return Redirect::action('UserController@show', $newUser->id);
	}

	public function show($id) {

		$user = User::find($id);

		if ($user->user_role == 1) {
			$userList = User::get();
			$userPages = User::with('tandas')->get();
			$tandaList = Tanda::get();
			$tandaPages = Tanda::paginate(7);
			$data = array(
				'userList' => $userList,
				'userPages' => $userPages,
				'tandaList' => $tandaList,
				'tandaPages' => $tandaPages
			);
			return View::make('user.admin')->with($data);
		}

		$tanda_table_check = DB::table('tandas')->get();

		$records = DB::table('payment')->where('user_id', '=', $id)->get();

		$data = array(
			'user' => $user,
			'tandas' => $tanda_table_check,
			'records' => $records
		);

		return View::make('user.dashboard')->with($data);

	}

	public function edit($id) {
		
		$user = User::find($id);

		return View::make('user.edit')->with('user', $user);

	}

	public function update($id) {

		$user = User::find($id);

		if (Input::hasFile('image')) {
			if (!empty($user->img_path)) {
				File::delete($user->img_path);
			}
			$file = Input::file('image');
			$ext = File::extension($file->getClientOriginalName());
			$filename = uniqid() . '.' . $ext;
			$upPost->image_path = $filename;
			Input::file('image')->move('uploads/', $filename);
		}
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->save();

	}

	public function destroy($id) {

		$user = User::find($id);
		$user->delete();
	}

}

?>