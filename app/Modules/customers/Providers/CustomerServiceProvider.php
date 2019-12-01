<?php

namespace Customers\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        $moduleName = basename(dirname(__DIR__, 1));
        config([
            $moduleName => File::getRequire(loadConfigFile('routes', $moduleName))
        ]);

        $this->loadRoutesFrom(loadRoute('web', $moduleName));
        $this->loadViewsFrom(loadView($moduleName), $moduleName);
        $this->loadTranslationsFrom(loadLang($moduleName), $moduleName);
        $this->loadMigrationsFrom(loadMigrations($moduleName));

    }
}
