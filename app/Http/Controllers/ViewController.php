<?php

namespace App\Http\Controllers;

use App\Article;
use App\Author;
use App\Branch;
use App\Carousel;
use App\ContactUs;
use App\Feedback;
use App\Partnership;
use App\Service;
use App\User;

class ViewController extends Controller {
  protected function home() {
    return view('website.home', ['data' => Carousel::all()]);
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
  protected function user() {
    return view('cpanel.user.index', ['data' => User::all()]);
  }
  protected function userAdd() {
    return view('cpanel.user.add');
  }
  /**
   * @param $id
   */
  protected function userEdit($id) {
    return view('cpanel.user.edit', ['row' => User::find($id), 'users' => User::all()]);
  }
  protected function article() {
    return view('cpanel.article.index', ['data' => Article::with('authors')->get()]);
  }
  protected function articleAdd() {
    return view('cpanel.article.add', ['authors' => Author::all()]);
  }
  /**
   * @param $id
   */
  protected function articleEdit($id) {
    return view('cpanel.article.edit', ['row' => Article::find($id), 'authors' => Author::all()]);
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
  protected function service() {
    return view('cpanel.service.index', ['data' => Service::with('rates')->get()]);
  }
  protected function serviceAdd() {
    return view('cpanel.service.add', ['branches' => Branch::all()]);
  }
  /**
   * @param $id
   */
  protected function serviceEdit($id) {
    return view('cpanel.service.edit', ['row' => Service::with('rates')->where('id', $id)->first(), 'branches' => Branch::all()]);
  }
  protected function branch() {
    return view('cpanel.branch.index', ['data' => Branch::all()]);
  }
  protected function branchAdd() {
    return view('cpanel.branch.add');
  }
  /**
   * @param $id
   */
  protected function branchEdit($id) {
    return view('cpanel.branch.edit', ['row' => Branch::find($id)]);
  }
  protected function cpanelfeedback() {
    return view('cpanel.feedback.index', ['data' => Feedback::all()]);
  }
  protected function cpanelcontactus() {
    return view('cpanel.contact.index', ['data' => ContactUs::all()]);
  }
  protected function cpanelpartnership() {
    return view('cpanel.partnership.index', ['data' => Partnership::all()]);
  }
  protected function cpanelwebsite() {
    return view('cpanel.website.index', ['data' => Carousel::all()]);
  }
  protected function cpanelwebsiteAdd() {
    return view('cpanel.website.add');
  }
  protected function cpanelwebsiteEdit($id) {
    return view('cpanel.website.edit', ['row' => Carousel::find($id)]);
  }

  protected function update() {
    putenv('PATH =  / usr / bin');
    return ' < pre > ' . shell_exec('cd / var  / www / html / 933 && gitpulloriginmaster2 >  & 1') . ' <  / pre > ';
  }
}
