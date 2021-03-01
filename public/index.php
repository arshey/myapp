<?php

use Router\Router;

require '../vendor/autoload.php';

$url = $_GET['url'];

$router = new Router($url);

$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/posts/:id', 'App\Controllers\BlogController@show');

$router->run();
