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
Route::get('/', 'ViewController@home')->name('home');
Route::prefix('/services')->group(function () {
  Route::get('/', 'ViewController@redirectServices }');
  Route::get('main', 'ViewController@servicesMain')->name('services.main');
  Route::get('creatives', 'ViewController@servicesCreatives')->name('services.creatives');
});
Route::prefix('blog')->group(function () {
  Route::get('/', 'ViewController@blog')->name('blog');
  Route::get('feature', 'ViewController@blogFeature')->name('blog.feature');
});
Route::get('feature', 'ViewController@feature')->name('feature');
Route::get('about', 'ViewController@about')->name('about');
Route::get('contact', 'ViewController@contact')->name('contact');
Route::get('termsofuse', 'ViewController@termsofuse')->name('termsofuse');
Route::get('partnerships', 'ViewController@partnerships')->name('partnerships');
Route::get('faqs', 'ViewController@faqs')->name('faqs');
Route::get('feedback', 'ViewController@feedback')->name('feedback');

Route::prefix('cpanel')->group(function () {
  Route::get('login', 'ViewController@login')->name('login');
  Route::post('login', 'AuthController@login');
  Route::middleware('auth')->group(function () {
    Route::get('/', 'ViewController@cpanel');
    Route::get('article', 'ViewController@article');
    Route::get('author', 'ViewController@author');
    Route::get('logout', 'AuthController@logout');
  });
  Route::get('update', 'ViewController@update');
});
