<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

require '../src/Suggestotron/Config.php';
\Suggestotron\Config::setDirectory('../config');

$config = \Suggestotron\Config::get('autoload');
require_once $config['class_path'] . '/Suggestotron/Autoloader.php';

if (!isset($_SERVER['PATH_INFO']) || empty($_SERVER['PATH_INFO']) || $_SERVER['PATHINFO'] == '/') {
	$route = 'list';
} else {
	$route = $_SERVER['PATH_INFO'];
}

$router = new \Suggestotron\Router();
$router->start($route);

?>