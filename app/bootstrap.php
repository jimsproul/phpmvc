<?php
/*

Bootstrap file has all the requies

*/
require_once('config/config.php');
require_once('helpers/urlHelper.php');

// Class Autoloader

spl_autoload_register(function($className) {
	require_once('libraries/'.$className.'.php');
});