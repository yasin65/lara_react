<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class userController extends Controller {

	public function page() {
		$cat = DB::table('gunguns')->get();
		return view('frontend.page', compact('cat'));
	}
	public function contact() {
		return view('frontend.contact');
	}

	public function submit1(request $request) {
		$data = array();
		
		$data['zila'] = $request->zila;

		$data['code'] = $request->code;

		DB::table('gunguns')->insert($data);
		return Redirect::to('/contact');
	}
	


	public function edity($id) {
		$boss = DB::table('gunguns')->where('id', $id)->first();
		return response()->json($boss);
		// return view('frontend.contactedit', compact('boss'));

	}
	public function deletey($id) {
		$delete = DB::table('gunguns')
			->where('id', $id)
			->delete();
		return redirect::to('/page');

	}

}
