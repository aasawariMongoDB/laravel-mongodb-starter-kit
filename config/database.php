<?php

return [

    'default' => env('DB_CONNECTION', 'mongodb'),

    'connections' => [

        'mongodb' => [
            'driver'   => 'mongodb',
            'dsn'      => env('MONGODB_URI', 'mongodb://username:password@localhost:27017'),
            'database' => env('MONGODB_DB', 'your_database'),
        ],

    ],

];
