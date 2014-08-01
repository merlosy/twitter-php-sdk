<?php

/**
 * @file
 * A single location to store configuration.
 http://localhost/twitter-php-sdk/workbench/merlosy/twitter-php-sdk/tests/
 */

define('CONSUMER_KEY', 'TJRApwp451DUr9ljRV0Zi1d16');
define('CONSUMER_SECRET', 'TDWwBrwagUMDc8BgzFhTUIhVzDC6iwGK27kpUmVaA3bWN2fa2i');
define('OAUTH_CALLBACK', 'http://localhost/twitter-php-sdk/workbench/merlosy/twitter-php-sdk/tests/callback.php');


function __autoload( $classname ) {
	// echo '<br>Loading class '.$classname . '... ';
	if ( !file_exists('../src/Merlosy/'.$classname.'.php'))
		throw new Exception("Autoloading $classname failed: Invalid path!");
	else {
		require_once( '../src/Merlosy/'.$classname.'.php');
		// echo 'done!';
	}
}

function tlog( $var ){
	if (is_array($var)){
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}
	else
		echo "<br>$var";
}

