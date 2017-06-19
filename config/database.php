<?php

return $databaseConfig = [
	'driver' => 'pdo',
	'dsn' => [
		'prefix' => 'mysql:',
		'host' => '127.0.0.1',
		'port' => '3306',
		'dbname' => 'test',
		//'unix_socket' => '',
		'charset' => 'utf8'
	]
];