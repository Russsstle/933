<?php

namespace App\Http\Controllers\Api;
use App\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return ContactUs::all();
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $contactus = new ContactUs;

    $contactus->fill($request->only(['name', 'email', 'subject', 'message']));

    if ($contactus->save()) {
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false, 'error' => 'There was an error adding the record.']);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id) {
    //
  }
}
