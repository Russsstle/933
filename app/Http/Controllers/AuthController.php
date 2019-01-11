<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;

class AuthController extends Controller {
  use ThrottlesLogins;
  /**
   * @param Request $request
   */
  protected function login(Request $request) {
    if ($this->hasTooManyLoginAttempts($request)) {
      $this->fireLockoutEvent($request);
      return $this->sendLockoutResponse($request);
    }

    $credentials = ['username' => $request->username, 'password' => $request->password];

    if (Auth::attempt($credentials, $request->remember_me)) {
      $this->clearLoginAttempts($request);
      return response()->json(['success' => true]);
    } else {
      $this->incrementLoginAttempts($request);
      return response()->json(['success' => false, 'error' => 'Invalid Username and/or Password.']);
    }
  }

  protected function logout() {
    Auth::logout();

    return redirect()->route('login');
  }

  public function username() {
    return 'username';
  }
}
