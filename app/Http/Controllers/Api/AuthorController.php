<?php

namespace App\Http\Controllers\Api;

use App\Author;
use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Validator;

class AuthorController extends Controller {
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
    return Author::all();
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
    $profile   = new Profile;

    $profile->user()->associate(User::find($request->user_id));

    $profile->fill($request->only(['first_name', 'last_name', 'position']));

    $author = new Author;

    $author->user()->associate(User::find($request->user_id));

    $author->fill($request->only(['display_name']));
    $profile->filename = uniqid($filename . '-') . '.' . $extension;
    $request->image->move(public_path('img/profile'), $profile->filename);

    if ($profile->save() && $author->save()) {
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
    return Author::firstOrFail($id);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id) {
    $author = Author::find($id);

    $author->user()->associate(User::find($request->user_id));

    $author->fill($request->only(['first_name', 'last_name', 'position', 'display_name']));

    if ($author->save()) {
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
    $author = Author::find($id);

    if ($author->delete()) {
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false, 'error' => 'There was an error deleting the record.']);
    }
  }
}
