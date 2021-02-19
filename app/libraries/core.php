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

		// search controllers for first node in the url for the controler name
		
		if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
			$this->currentController = ucwords($url[0]);
			unset($url[0]);
		} 

		require_once('../app/controllers/'.$this->currentController.'.php');

		$this->currentController = new $this->currentController;
		
		if (isset($url[1])) {
			if(method_exists($this->currentController,$url[1])) {
				$this->currentMethod = $url[1];
				unset($url[1]);
			}  
		}  

		$this->params = $url ? array_values($url) : [];
		call_user_func_array([$this->currentController,
								$this->currentMethod],
								$this->params);
		
	}

	public function getUrl(){
		if(isset($_GET['url'])){
			$url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
			return $url;
		} else {
			return array("NoneEntered");
		}
	}

}