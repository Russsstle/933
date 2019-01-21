<?php

namespace App\Http\Controllers;

use App\Mail\PartnershipMailer;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller {
  /**
   * @return mixed
   */
  public function __construct() {
    return $this->middleware('throttle:10');
  }

  /**
   * @param Request $request
   */
  public function sendPartnershipMail(Request $request) {
    Mail::to($request->email)->send(new PartnershipMailer($request->only([
      'name',
      'email',
      'position',
      'school',
      'organization',
      'organization_type'
    ])));

    return response()->json(['success' => true]);
  }
  /**
   * @param Request $request
   */
  public function sendContactUsMail(Request $request) {
    Mail::to($request->email)->send(new ContactUsMailer($request->only([
      'name',
      'email',
      'subject',
      'message'
    ])));

    return response()->json(['success' => true]);
  }
}
