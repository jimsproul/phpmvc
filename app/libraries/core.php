<?php
/*

Looking at URL pulls out data & args

App Core Class
Creates URL & loads core controler

URL format = /controller/method/params

*/

class Core {
	
	protected $currentController	= 'Pages';
	protected $currentMethod		= 'index';
	protected $params				= [];

	public function __construct(){
		$url = $this->getUrl();
	}

	public function getUrl(){
		if(isset($_GET['url'])){
			$url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
			return $url;
		}
	}

}