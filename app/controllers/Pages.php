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
		$this->view('pages/about');
	
	}

}