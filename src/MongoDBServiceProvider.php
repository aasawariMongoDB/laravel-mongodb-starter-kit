<?php

namespace AasawariSahasrabuddhe\MongodbStarterKit;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class MongoDbServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/mongodb.php', 'mongodb');

        $mongodbConnections = Config::get('mongodb.connections');

        if (is_array($mongodbConnections)) {
            foreach ($mongodbConnections as $name => $connection) {
                Config::set("database.connections.{$name}", $connection);
            }
        }
        //setting to default
        Config::set('database.default', Config::get('mongodb.default', 'mongodb'));
    }

    public function boot()
    {
        // Publish the package config to application's config directory
        $this->publishes([
            __DIR__ . '/../config/mongodb.php' => $this->app->basePath('config/mongodb.php'),
        ], 'config');
    }
}
