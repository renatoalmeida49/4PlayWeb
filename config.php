<?php
require 'environment.php';

$config = array();

if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/4PlayWeb/");
	$config['dbname'] = '4play';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://localhost/4PlayWeb/");
	$config['dbname'] = '4play';
	$config['host'] = '4play.com.br';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}