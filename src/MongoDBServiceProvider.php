<?php

namespace AasawariSahasrabuddhe\MongodbStarterKit;

use Illuminate\Support\ServiceProvider;

class MongoDbServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge the config with app config
        $this->mergeConfigFrom(__DIR__.'/../config/mongodb.php', 'mongodb');
    }

    public function boot()
    {
        // Allow publishing the config file
        $this->publishes([
            __DIR__.'/../config/mongodb.php' => $this->app->basePath('config/mongodb.php'),
        ], 'config');
    }
}
