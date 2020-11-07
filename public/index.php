<?php

use ishop\App;

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new App();

// echo "Здравствуй, мир!<br>";
// debug(\ishop\Router::getRoutes());
// throw new Exception('Страница не найдена', 404);