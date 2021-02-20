<?php

class Pages extends Cntlr {

	public function __construct() {
 
	}

	public function index() {
		$data = [
			'title' => 'Php MVC SampleApp'
				];
		$this->view('pages/index',$data);
	}

	public function about() {
		$data = [
			'title' => 'About Page'
				];
		$this->view('pages/about',$data);
	
	}

}