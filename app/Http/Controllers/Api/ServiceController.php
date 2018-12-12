<?php

namespace App\Http\Controllers;

use App\Branch;
use App\Service;
use Illuminate\Http\Request;
use Validator;

class ServiceController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return Service::all();
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

    $filename  = pathinfo($request->image, PATHINFO_FILENAME);
    $extension = pathinfo($request->image, PATHINFO_EXTENSION);

    $service = new Service;

    $service->branches()->associate(Branch::find($request->branch_id));

    $service->fill($request->only(['name', 'description']));
    $service->filename = uniqid($filename . '-') . $extension;

    if ($service->save()) {
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
    return Service::firstOrFail($id);
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

      $filename  = pathinfo($request->image, PATHINFO_FILENAME);
      $extension = pathinfo($request->image, PATHINFO_EXTENSION);
    }

    $service = Service::find($id);

    $service->branches()->associate(Branch::find($request->branch_id));

    $service->fill($request->only(['name', 'description']));

    if ($filename) {
      $service->filename = uniqid($filename . '-') . $extension;
    }

    if ($service->save()) {
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false, 'error' => 'There was an error adding the record.']);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id) {
    $service = Service::find($id);

    if ($service->delete()) {
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false, 'error' => 'There was an error adding the record.']);
    }
  }
}
