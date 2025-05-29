<?php

namespace Aasawari\MongoDBStarterKit\Src;

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
        // Allow publishing the config
        $this->publishes([
            __DIR__.'/../config/mongodb.php' => config_path('mongodb.php'),
        ], 'config');
    }
}