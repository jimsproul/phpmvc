<?php
/*

Bootstrap file has all the included files

*/

// require helpers

require_once('config/config.php');
require_once('helpers/urlHelper.php');

// Register a class autoloader

spl_autoload_register(function($className) {
	require_once('libraries/'.$className.'.php');
});
