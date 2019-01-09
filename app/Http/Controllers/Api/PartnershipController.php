<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Partnership;
use Illuminate\Http\Request;
use Validator;

class PartnershipController extends Controller {
  /**
   * @return mixed
   */
  public function __construct() {
    return $this->middleware('auth');
  }

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
    $validator = Validator::make($request->all(), [
      'image' => 'image'
    ]);

    if ($validator->fails()) {
      return response()->json(['success' => false, 'error' => 'Invalid Image Format.']);
    }

    $filename    = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
    $extension   = pathinfo($request->image->getClientOriginalName(), PATHINFO_EXTENSION);
    $partnership = new Partnership;

    $partnership->fill($request->only(['name', 'email', 'position', 'school', 'organization', 'organization_type']));
    $partnership->filename = uniqid($filename . '-') . '.' . $extension;
    $request->image->move(public_path('uploads'), $partnership->filename);
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
    return Partnership::firstOrFail($id);
  }

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
  public function update(Request $request, $id) {
    if ($request->image) {
      $validator = Validator::make($request->all(), [
        'image' => 'image'
      ]);

      if ($validator->fails()) {
        return response()->json(['success' => false, 'error' => 'Invalid Image Format.']);
      }

      $filename  = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
      $extension = pathinfo($request->image->getClientOriginalName(), PATHINFO_EXTENSION);
    }
    $partnership = Partnership::find($id);
    $partnership->fill($request->only(['name', 'email', 'position', 'school', 'organization', 'organization_type']));
    if (isset($filename)) {
      $partnership->filename = uniqid($filename . '-') . '.' . $extension;
      $request->image->move(public_path('uploads'), $partnership->filename);
    }

    if ($partnership->save()) {
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false, 'error' => 'There was an error updating the record.']);
    }
  }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
  public function destroy($id) {
    $partnership = Partnership::find($id);

    if ($partnership->delete()) {
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false, 'error' => 'There was an error adding the record.']);
    }
  }
};
