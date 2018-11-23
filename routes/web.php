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
Route::get('/home', function () {
  return view('home');
});
Route::get('/blog', function () {
  return view('blog');
});
Route::get('933main', function () {
  return view('933main');
});
Route::get('933creatives', function () {
  return view('933creatives');
});
Route::get('/blog', function () {
  return view('blog');
});
Route::get('/feature', function () {
  return view('feature');
});
Route::get('/about', function () {
  return view('about');
});
Route::get('/contactus', function () {
  return view('contactus');
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
// Route::get('/', "NavbarController@show");
