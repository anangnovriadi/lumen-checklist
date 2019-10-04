<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->get('/sample', 'SampleController@index');
// $router->get('/sample', 'SampleController@index')->middleware('client');

$app = $router;

$app->group(['prefix' => 'api/v1', 'middleware' => 'client'], function () use ($app) {
    $app->get('/', function ()    {
        // Uses Auth Middleware
    });

    $app->get('/sample', 'SampleController@index');

    $app->get('user/profile', function () {
        // Uses Auth Middleware
    });
});
