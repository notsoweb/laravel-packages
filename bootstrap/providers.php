<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,
    App\Providers\JetstreamServiceProvider::class,
    MongoDB\Laravel\Auth\PasswordResetServiceProvider::class,
    MongoDB\Laravel\MongoDBBusServiceProvider::class,
    MongoDB\Laravel\MongoDBQueueServiceProvider::class,
    MongoDB\Laravel\MongoDBServiceProvider::class,
    Notsoweb\LaravelMongoDB\Permission\ServiceProvider::class,
    Notsoweb\LaravelMongoDB\Session\ServiceProvider::class,
];
