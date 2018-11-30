<?php

namespace App\Http\Controllers;

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
}
