<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

use Framework\Application;
use Framework\Database\Database;
use Framework\Http\Middleware;

new Application();

Application::bind(Database::class, function() {
    $config = require base_path('config/database.php');

    return Database::getInstance($config);
});

Application::bind(Middleware::class, function() {
    return Middleware::getInstance();
});

$db = Application::resolve(Database::class);