<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SqliteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $databaseFile = config('database.connections.sqlite.database');
        if (!file_exists($databaseFile)) {
            info('Make Sqlite File "' . $databaseFile . '"');
            file_put_contents($databaseFile, '');
        }
    }
}
