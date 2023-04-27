<?php

/** @var \Framework\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all the routes for an application.
| Simply tell Framework the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', [\App\Http\Controllers\ExampleController::class, 'index']);