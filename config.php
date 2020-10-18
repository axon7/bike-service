<?php


return [
    'database' => [
        'connection' => 'mysql:host=localhost',
        'username'=> 'root',
        'password' => '',
        'name' => 'bike_repair_service',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];