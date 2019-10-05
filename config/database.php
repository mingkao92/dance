<?php

return $databaseConfig = [
    'default' => [
        'driver' => 'pdo',
        'dsn' => [
            'prefix' => 'mysql:',
            'host' => '127.0.0.1',
            'port' => '3306',
            'db' => 'test',
            'charset' => 'utf8'
        ]
    ],
];