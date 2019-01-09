<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::apiResources([
  'users'        => 'UserController',
  'authors'      => 'AuthorController',
  'articles'     => 'ArticleController',
  'services'     => 'ServiceController',
  'branches'     => 'BranchController',
  'feedbacks'    => 'FeedbackController',
  'contactus'    => 'ContactUsController',
  'partnerships' => 'PartnershipController',
  'carousel'     => 'CarouselController',
  'galleries'    => 'GalleryController'
]);
