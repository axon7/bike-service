<?php

$config = require 'config.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);


require 'Router.php';
$router = new Router();

$uri = trim($_SERVER['REQUEST_URI'], '/bike-service/');

require Router::load('routes.php')-> direct($uri);



