<?php


$config = require 'config.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);


$names = $query->selectAll('names');



require 'views/repair_list.view.php';