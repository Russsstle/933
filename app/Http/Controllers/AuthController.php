<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller {
	/**
	 * @param Request $request
	 */
	protected function login(Request $request) {
		$credentials = ['username' => $request->username, 'password' => $request->password];

		if (Auth::attempt($credentials, $request->remember_me)) {
			return response()->json(['success' => true]);
		} else {
			return response()->json(['success' => false, 'error' => 'Invalid Username and/or Password.']);
		}
	}

	protected function logout() {
		Auth::logout();

		return redirect()->route('login');
	}
}
