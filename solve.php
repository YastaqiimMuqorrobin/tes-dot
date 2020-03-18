<?php

use Illuminate\Support\Str;

return [
    'storage' => [
        'database' => [
            'client' => 'mysql',
            'connection' => [
                  'host' => env('SQL_HOST', '127.0.0.1'),
                  'port' => env('SQL_PORT', '3306'),
                  'user' => env('SQL_USER', 'forge'),
                  'password' => env('SQL_PASSWORD', ''),
                  'database' => env('SQL_DATABASE', 'forge'),
            ],
        ],
    ],
];

?>
