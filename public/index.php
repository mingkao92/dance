<?php

chdir(dirname(__DIR__));

require './vendor/autoload.php';

$appConfig = require_once './config/app.php';

\Kernel\Http\Application::init($appConfig)->run();