<?php

return [
    'database' => [
        'driver' => 'sqlite',
        'database' => base_path('database/database.sqlite')

       
            // 'driver' => 'mysql',
            // 'host' => 'localhost',
            // 'port' => 3306,
            // 'dbname' => 'bookwise',
            // 'user' => 'root',
            // 'charset' => 'utf8mb4'
   
    ],

    'security' => [
        'first_key' => env('ENCRYPT_FIRST_KEY', base64_encode('anderson')), 
        'second_key' => env('ENCRYPT_SECOND_KEY', base64_decode('123mudar'))
    ]
];