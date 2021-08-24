<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->post('/user/login', 'UserController@routeUserService');
$router->post('/user/register', 'UserController@routeUserService');
$router->get('/bill/token/{token}','BillController@routeBillService');
$router->post('/bill/pay','BillController@payBill');

$router->group(['middleware' => 'jwt'], function () use ($router) {

    $router->post('/bill/create', 'BillController@routeBillService');
    $router->post('/bill/list', 'BillController@routeBillService');
    $router->get('/bill/list/frequency/{frequency}', 'BillController@routeBillService');
    $router->get('/user/balance', 'UserController@routeBillService');

});
