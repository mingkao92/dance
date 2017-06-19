<?php 

return $routeConfig = [
	'GET' => [
			'/' => 'IndexController->index',
		],
	'POST' => [
			'/user/add' => 'UserController->add',
		],
	'GET|POST' => [
			'/user/index' => 'UserController->index',
		],
];