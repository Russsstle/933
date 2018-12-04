<?php

namespace App\Http\Controllers;

use App\Author;
use App\User;

class ViewController extends Controller {
  protected function home() {
    return view('website.home');
  }
  protected function login() {
    return view('cpanel.login');
  }
  protected function redirectServices() {
    return redirect()->route('website.services.main');
  }
  protected function servicesMain() {
    return view('website.services.main');
  }
  protected function servicesCreatives() {
    return view('website.services.creatives');
  }
  protected function blog() {
    return view('website.blog.index');
  }
  protected function blogFeature() {
    return view('website.blog.feature');
  }
  protected function feature() {
    return view('website.feature');
  }
  protected function about() {
    return view('website.about');
  }
  protected function contact() {
    return view('website.contact');
  }
  protected function termsofuse() {
    return view('website.termsofuse');
  }
  protected function partnerships() {
    return view('website.partnerships');
  }
  protected function faqs() {
    return view('website.faqs');
  }
  protected function feedback() {
    return view('website.feedback');
  }
  protected function cpanel() {
    return view('cpanel.index');
  }
  protected function article() {
    return view('cpanel.article.index');
  }
  protected function articleAdd() {
    return view('cpanel.article.add');
  }
  protected function author() {
    return view('cpanel.author.index', ['data' => Author::all()]);
  }
  protected function authorAdd() {
    return view('cpanel.author.add', ['users' => User::all()]);
  }

  /**
   * @param $id
   */
  protected function authorEdit($id) {
    return view('cpanel.author.edit', ['row' => Author::find($id), 'users' => User::all()]);
  }
  protected function update() {
    putenv('PATH=/usr/bin');
    return '<pre>' . shell_exec('cd/var/www/html/933 && git pull origin master 2>&1') . '</pre>';
  }
}
