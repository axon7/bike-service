<?php


$router->get('', 'PagesController@repairList');
$router->get('login','PagesController@login');
$router->get('register', 'PagesController@register');
$router->get('add-repair',  'PagesController@addRepair');

$router->post('add-repair','PagesController@addRepair');


