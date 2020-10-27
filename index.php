<?php

require 'vendor/autoload.php';


//require 'Router.php';
$router = new Router();

$uri = preg_replace( '/\/bike-service\//i', "", $_SERVER['REQUEST_URI']);
$uri2 = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri3 = preg_replace('/\/bike-service\//i', "", $uri2);
echo $uri3;

require Router::load('routes.php')-> direct($uri3, $_SERVER['REQUEST_METHOD']);



