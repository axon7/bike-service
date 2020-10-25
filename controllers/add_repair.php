<?php

require 'vendor/autoload.php';


$config = require 'config.php';

//require 'database/Connection.php';
//require 'database/QueryBuilder.php';
$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);


$repairs = $query->selectAll('repairs');

if(!empty($_POST['brand'])){
    $query ->insert('names', [
        'brand' => $_POST['brand'],
        'model' => $_POST['model']
    ]);

    header("Location: /bike-service");
}




require 'views/add_repair.view.php';