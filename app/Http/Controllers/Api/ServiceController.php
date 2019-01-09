<?php

namespace App\Http\Controllers\Api;

use App\Branch;
use App\Http\Controllers\Controller;
use App\Rate;
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

    $filename  = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
    $extension = pathinfo($request->image->getClientOriginalName(), PATHINFO_EXTENSION);

    $service = new Service;

    $service->branches()->associate(Branch::find($request->branch_id));

    $service->fill($request->only(['title', 'description']));
    $service->filename = uniqid($filename . '-') . "." . $extension;

    $request->image->move(public_path('uploads'), $service->filename);

    if ($service->save()) {
      foreach (explode("\n", $request->rates) as $rate_str) {
        $rate_str = explode('|', $rate_str);

        $rate = new Rate;
        $rate->services()->associate($service);
        $rate->name  = $rate_str[0];
        $rate->price = $rate_str[1];

        $rate->save();
      }
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

      $filename  = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME);
      $extension = pathinfo($request->image->getClientOriginalName(), PATHINFO_EXTENSION);
    }

    $service = Service::find($id);

    $service->branches()->associate(Branch::find($request->branch_id));

    $service->fill($request->only(['title', 'description']));

    if (isset($filename)) {
      $service->filename = uniqid($filename . '-') . "." . $extension;
      $request->image->move(public_path('uploads'), $service->filename);
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
