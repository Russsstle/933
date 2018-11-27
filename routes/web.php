<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/', function () {
  return view('home');
});
Route::prefix('/services')->group(function () {
  Route::get('/', function () {
    return redirect()->route('services.main');
  });
  Route::get('main', function () {
    return view('services.main');
  })->name('services.main');
  Route::get('creatives', function () {
    return view('services.creatives');
  })->name('services.creatives');
});
Route::prefix('blog')->group(function () {
  Route::get('/', function () {
    return view('blog.index');
  })->name('blog');
  Route::get('feature', function () {
    return view('blog.feature');
  })->name('blog.feature');
});
Route::get('/feature', function () {
  return view('feature');
});
Route::get('/about', function () {
  return view('about');
});
Route::get('/contact', function () {
  return view('contact');
});
Route::get('/termsofuse', function () {
  return view('termsofuse');
});
Route::get('/partnerships', function () {
  return view('partnerships');
});
Route::get('/faqs', function () {
  return view('faqs');
});
Route::get('/feedback', function () {
  return view('feedback');
});
