<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller {
	public function index() {
		return view('frontend.index');
	}

	public function another_page() {
		return view('frontend.another_page');
	}
	public function example() {
		$yas = DB::table('users')->get();

		return view('frontend.examples', compact('yas'));
	}


	

	public function submit(request $request) {
		$data = array();
		$data['name'] = $request->name;
		$data['email'] = $request->email;
		$data['message'] = $request->message;
		DB::table('users')->insert($data);
		return redirect::to('/another');

	}
	public function delete($id) {
		$delete = DB::table('users')
			->where('id', $id)
			->delete();
		return redirect::to('/example');

	}

	public function edit($id) {
		$exam = DB::table('users')->where('id', $id)->first();
		// return response()->json($boss);
		return view('frontend.examedit', compact('exam'));

	}
	public function update(request $request, $id) {
		$data = array();
		$data['name'] = $request->name;
		$data['email'] = $request->email;
		$data['message'] = $request->message;

		DB::table('users')->where('id', $id)->update($data);
		return redirect::to('/example');
	}

	public function all() {

		$post = DB::table('gunguns')->join('users', 'users.id', 'gunguns.id')->get();

		return view('frontend.all', compact('post'));

	}

}
