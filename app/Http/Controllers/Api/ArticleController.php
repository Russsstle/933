<?php

namespace App\Http\Controllers\Api;

use App\Article;
use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    return Article::all();
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $article = new Article;

    $article->authors()->associate(Author::find($request->author_id));

    $article->fill($request->only(['title', 'content', 'date']));

    if ($article->save()) {
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
    $article = Article::find($id);

    $article->authors()->associate(Author::find($request->author_id));

    $article->fill($request->only(['title', 'content', 'date']));

    if ($article->save()) {
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
    $article = Article::find($id);

    if ($article->delete()) {
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false, 'error' => 'There was an error deleting the record.']);
    }
  }
}
