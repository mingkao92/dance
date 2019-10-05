<?php

return $routeConfig = [
    '/' => [
        'GET' => '\Core\Controller\Home\IndexController->index',
    ],
    '/user/add' => [
        'POST' => '\Core\Controller\Home\UserController->add',
    ],
];