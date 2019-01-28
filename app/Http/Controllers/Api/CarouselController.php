<?php

namespace App\Http\Controllers\Api;
use App\Carousel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class CarouselController extends Controller {
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
    return Carousel::all();
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
    $carousel  = new Carousel;
    $carousel->fill($request->only(['title', 'description', 'label_align']));

    $carousel->filename = uniqid($filename . '-') . '.' . $extension;
    $request->image->move(public_path('img/carousel'), $carousel->filename);

    if ($carousel->save()) {
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
    return Carousel::findOrFail($id);
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
    $carousel = Carousel::find($id);

    $carousel->fill($request->only(['title', 'description', 'label_align']));
    if (isset($filename)) {
      $carousel->filename = uniqid($filename . '-') . '.' . $extension;
      $request->image->move(public_path('img/carousel'), $carousel->filename);
    }

    if ($carousel->save()) {
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
    $carousel = Carousel::find($id);

    if ($carousel->delete()) {
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false, 'error' => 'There was an error deleting the record.']);
    }
  }
}
