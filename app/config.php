<?php

return [
    'database' => [
        'name' => 'biblioteca',
        'username' => 'Guille',
        'password' => 'guille',
        'connection' => 'mysql:host=localhost',
        'opciones' => [ PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_PERSISTENT => true]
                ],
    'email' => [
        'smtp_server'=>'smtp.gmail.com',
        'smtp_port'=>'587',
        'smtp_security'=>'tls',
        'username' => 'lorcaguillermofp@gmail.com',
        'password' => 'oknmwdlijqyzzucy',
        'name' => 'Guillermo'
    ],
    'logs' => [
        'filename'=>'logs/biblioteca.log'
    ]
];
