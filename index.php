<?php
	require_once 'config.php';
	require_once 'util/Auth.php';
	#Autoloader
	function __autoload($class){
		require_once 'libs/'.$class.'.php';
	}
	require_once 'libs/Form/val.php';
	$app = new Bootstrap();
	$app->init();
?>