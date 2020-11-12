<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", CORE . '/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'watches');

// получаем http://ishop2.loc/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

// получаем http://ishop2.loc/
$app_path = preg_replace("#[^/]+$#", '', $app_path);
define("PATH", preg_replace("#/$#", '', $app_path));
define("ADMIN", PATH . '/admin');
require_once ROOT . '/vendor/autoload.php';
