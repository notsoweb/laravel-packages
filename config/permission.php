<?php

/**
 * Configuraciones del sistema de permisos
 */
return [
    'mongodb' => [
        'driver' => 'mongodb',
        'dsn' => env('DB_HOST', 'mongodb://localhost:27017'),
        'database' => env('DB_DATABASE', 'laravel'),
    ]
];