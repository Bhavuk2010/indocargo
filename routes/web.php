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

$router->post('/', function () use ($router) {
    return 'hello  bhavuk';
});


$router->post('register_fo','Fleet_OperatorController@register_fleet_operator');

//$router->post('register_driver','DriversController@register_driver');

//$router->post('session','Fleet_OperatorController@showProfile');

$router->post('login','LoginController@login');