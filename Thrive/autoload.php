<?php

spl_autoload_register(function($className) {

	$fullPath = str_replace("\\", DIRECTORY_SEPARATOR, $className);
	include_once __DIR__. '/../' . $fullPath . '.php';

});