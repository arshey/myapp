<?php

use Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR);
define('DB_HOST', "127.0.0.1");
define('DB_NAME', "poo");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "root");

$demo = "ceci est une demo";


$url = $_GET['url'];

$router = new Router($url);

$router->get('/', 'App\Controllers\BlogController@welcome');
$router->get('/posts', 'App\Controllers\BlogController@index');
$router->get('/posts/:id', 'App\Controllers\BlogController@show');
$router->get('/tags/:id', 'App\Controllers\BlogController@tags');

$router->run();
