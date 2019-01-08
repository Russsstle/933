<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Partnership;
use Illuminate\Http\Request;

class PartnershipController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return Partnership::all();
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $partnership = new Partnership;

    $partnership->fill($request->only(['name', 'email', 'position', 'school', 'organization', 'organizationtype']));

    if ($partnership->save()) {
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
    // return Partnership::firstOrFail($id);}
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
};
