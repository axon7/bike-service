<?php

$config = require 'config.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';
$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);


$repairs = $query->selectAll('repairs');



require 'views/add_repair.view.php';