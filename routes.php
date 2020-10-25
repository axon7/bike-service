<?php
//$router->define([
//    ''=> 'controllers/repair_list.php',
//    'login' => 'controllers/login.php',
//    'register' => 'controllers/register.php',
//    'add-repair' => 'controllers/add_repair.php',
//    'names' => 'controllers/names.php'
// ]);


$router->get('', 'controllers/repair_list.php');
$router->get('login','controllers/login.php');
$router->get('register', 'controllers/register.php');
$router->get('add-repair',  'controllers/add_repair.php');


$router->post('add-repair','controllers/add_repair.php');


