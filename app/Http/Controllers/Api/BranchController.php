<?php

namespace App\Http\Controllers;

use App\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return Branch::all();
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $branch = new Branch;

    $branch->fill($request->only(['name']));

    if ($branch->save()) {
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
    return Branch::firstOrFail($id);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {
    $branch = Branch::find($id);

    $branch->fill($request->only(['name']));

    if ($branch->save()) {
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
    $branch = Branch::find($id);

    if ($branch->delete()) {
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false, 'error' => 'There was an error deleting the record.']);
    }
  }
}
