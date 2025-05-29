<?php

return [

    'driver'   => 'mongodb',
    'dsn'      => env('MONGODB_URI', null),
    'host'     => env('DB_HOST', '127.0.0.1'),
    'port'     => env('DB_PORT', 27017),
    'database' => env('DB_DATABASE', 'your_mongo_db'),
    'username' => env('DB_USERNAME', ''),
    'password' => env('DB_PASSWORD', '')
];

