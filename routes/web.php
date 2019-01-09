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
    Route::prefix('users')->group(function () {
      Route::get('/', 'ViewController@user');
      Route::get('add', 'ViewController@userAdd');
      Route::get('{id}/edit', 'ViewController@userEdit');
    });
    Route::prefix('authors')->group(function () {
      Route::get('/', 'ViewController@author');
      Route::get('add', 'ViewController@authorAdd');
      Route::get('{id}/edit', 'ViewController@authorEdit');
    });
    Route::prefix('articles')->group(function () {
      Route::get('/', 'ViewController@article');
      Route::get('add', 'ViewController@articleAdd');
      Route::get('{id}/edit', 'ViewController@articleEdit');
    });
    Route::prefix('services')->group(function () {
      Route::get('/', 'ViewController@service');
      Route::get('add', 'ViewController@serviceAdd');
      Route::get('{id}/edit', 'ViewController@serviceEdit');
    });
    Route::prefix('branches')->group(function () {
      Route::get('/', 'ViewController@branch');
      Route::get('add', 'ViewController@branchAdd');
      Route::get('{id}/edit', 'ViewController@branchEdit');
    });
    Route::prefix('branches')->group(function () {
      Route::get('/', 'ViewController@branch');
      Route::get('add', 'ViewController@branchAdd');
      Route::get('{id}/edit', 'ViewController@branchEdit');
    });
    Route::prefix('feedbacks')->group(function () {
      Route::get('/', 'ViewController@cpanelFeedback');
    });
    Route::prefix('contactus')->group(function () {
      Route::get('/', 'ViewController@cpanelContactUs');
    });
    Route::prefix('partnerships')->group(function () {
      Route::get('/', 'ViewController@cpanelPartnership');
    });
    Route::prefix('website')->group(function () {
      Route::prefix('carousel')->group(function () {
        Route::get('/', 'ViewController@cpanelCarousel');
        Route::get('add', 'ViewController@cpanelCarouselAdd');
        Route::get('{id}/edit', 'ViewController@cpanelCarouselEdit');
      });
      Route::prefix('gallery')->group(function () {
        Route::get('/', 'ViewController@cpanelGallery');
        Route::get('add', 'ViewController@cpanelGalleryAdd');
        Route::get('{id}/edit', 'ViewController@cpanelGalleryEdit');
      });
    });
    Route::get('logout', 'AuthController@logout');
  });
  Route::get('update', 'ViewController@update');
});

// Route::get('test', function () {
//   $service = new \App\Service;

//   $service->branches->associate(\App\Branch::find(1))
// });
