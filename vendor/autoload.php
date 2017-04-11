<?php

	spl_autoload_register(function ($class) {
		$path = ROOT . strtolower(str_replace('\\', DIRECTORY_SEPARATOR, $class));
		var_dump($path);
		spl_autoload($path);
	});
