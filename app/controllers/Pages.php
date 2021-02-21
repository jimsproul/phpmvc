<?php

class Pages extends Cntlr {

	public function __construct() {
 
	}

	public function index() {
		$data = [
			'title' => 'Php MVC SampleApp',
			'description' => 'A simple Php MVC Applications'
				];
		$this->view('pages/index',$data);
	}

	public function about() {
		$data = [
			'title' => 'About Page',
			'description' => 'A app to show how to build out a simple Php MVC applications',
			'appver' => APPVERSION
				];
		$this->view('pages/about',$data);
	
	}

}