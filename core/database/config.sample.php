<?php

return [
    'database' => [
        'connection' => 'mysql:host=127.0.0.1',
        'name' => 'YOUR_DB',
        'user' => 'YOUR_DB_USER',
        'pass' => 'YOUR_DB_PASSWORD',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
