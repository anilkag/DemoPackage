<?php
namespace Dexbytes\Registration;

use Illuminate\Support\ServiceProvider;

class RegistrationServiceProvier extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'registration');
        $this->loadMigrationsFrom(__DIR__.'/datebase/migrations');
    }

    public function register()
    {

    }
}
