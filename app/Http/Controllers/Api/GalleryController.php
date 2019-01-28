<?php

namespace App\Http\Controllers\Api;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class GalleryController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return Gallery::all();
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
    $gallery   = new Gallery;
    // $gallery->fill($request->only(['title', 'description']));

    $gallery->filename = uniqid($filename . '-') . '.' . $extension;
    $request->image->move(public_path('img/gallery'), $gallery->filename);

    if ($gallery->save()) {
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
    $gallery = Gallery::find($id);
    if (isset($filename)) {
      $gallery->filename = uniqid($filename . '-') . '.' . $extension;
      $request->image->move(public_path('img/gallery'), $gallery->filename);
    }

    if ($gallery->save()) {
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
    $gallery = Gallery::find($id);

    if ($gallery->delete()) {
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false, 'error' => 'There was an error deleting the record.']);
    }
  }
}
