<?php

namespace AasawariSahasrabuddhe\MongodbStarterKit;

use Illuminate\Support\ServiceProvider;

class MongoDbServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Merge into Laravel's native `database` config
        $this->mergeConfigFrom(__DIR__ . '/../config/database.php', 'database');
    }

    public function boot()
    {
        // Use $this->app->configPath() instead of config_path()
        $this->publishes([
            __DIR__ . '/../config/database.php' => $this->app->configPath('database.php'),
        ], 'config');
    }
}
