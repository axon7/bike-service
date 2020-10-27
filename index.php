<?php

require 'vendor/autoload.php';




$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_transformed = preg_replace('/\/bike-service\//i', "", $uri);


Router::load('routes.php')-> direct($uri_transformed, $_SERVER['REQUEST_METHOD']);



