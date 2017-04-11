<?php

	//FRONT CONTROLLER

	//1. General settings
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	//2. Connection file system
	define('ROOT', __DIR__ . '/../');
	define('SERVER', $_SERVER['SERVER_NAME']);
	require_once(ROOT . '/vendor/autoload.php');

	session_start();

	//4. Call router
	(new app\core\Router)->run();
