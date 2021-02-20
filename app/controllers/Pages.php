<?php

class Pages extends Cntlr {

	public function __construct() {
 
	}

	public function index() {
		$data = [
			'title' => 'Welcome Home'
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