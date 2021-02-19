<?php
/*

Bootstrap file has all the requies

*/
require_once('config/config.php');

// Class Autoloader

spl_autoload_register(function($className) {
	require_once('libraries/'.$className.'.php');
});