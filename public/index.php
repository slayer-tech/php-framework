<?php

use Framework\Application;

error_reporting(E_ALL ^ E_DEPRECATED);

const BASE_PATH = __DIR__ . '/../';

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Connecting an autoloader that will automatically load classes
|
*/

require BASE_PATH . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Handle the request and send response
|
*/

require_once BASE_PATH . '/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Register middlewares
|--------------------------------------------------------------------------
*/
//
//Application::middleware([
//    'guest' => Guest::class
//]);

$router = Application::$router;

require_once BASE_PATH . '/routes/api.php';