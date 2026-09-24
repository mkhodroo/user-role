<?php 

namespace BehinUserRoles;

use Illuminate\Support\ServiceProvider;

class UserRolesServiceProvider extends ServiceProvider
{
    public function register() {
        require_once __DIR__ . '/Helper/helper.php';
    }

    public function boot() {
        $this->publishes([
            __DIR__ . '/migrations' => database_path('migrations'),
        ]);
        $this->loadMigrationsFrom(__DIR__ . "/Migrations");
        $this->loadRoutesFrom(__DIR__. '/routes.php');;
        $this->loadViewsFrom(__DIR__. '/Views', 'URPackageView');
    }
}