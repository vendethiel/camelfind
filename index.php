<?php
error_reporting(-1);
require 'vendor/php/autoload.php';

function array_extract($array, array $cols)
{
	$vals = array();
	foreach ($cols as $col)
		$vals[$col] = $array[$col];
	return $vals;
}

// lol swag
function encrypt($pass) {
    return md5($pass);
}

define('BASEPATH', dirname($_SERVER['SCRIPT_NAME']) . '/');
define('BASEURL', BASEPATH . 'index.php/');
try {
	session_start();
	$routes = require 'routes.php';
	$router = new Minima\Dispatcher($routes);

	$db_config = require 'db_config.php';
	$db = new PDO('mysql:host=' . $db_config['host'] . ';dbname=' . $db_config['dbname'],
		$db_config['user'], $db_config['pass'],
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	PotterORM\Base::setDb($db);

	$router->setVariables(array(
		'db' => $db,
		'session' => new UserSession($db),
	));

	$router->dispatch();
} catch (Exception $e) {
	var_dump($e->getMessage(), $e->getTraceAsString());
}