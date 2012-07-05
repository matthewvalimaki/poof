<?php
/**
 * PHP Object Oriented Framework 
 */
function __autoload($class) {
	$className = explode('\\', $class);
	
	$path = '../';
	foreach ($className as $key => $part) {
		if (count($className) - 1 == $key)
		$path .= '/' . $part . '.php';
		else
		$path .= '/' . strtolower($part);
	}

	require_once $path;
}

$poof = new Library\Poof\Poof();
