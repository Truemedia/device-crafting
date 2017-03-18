<?php namespace Wadepenistone\Devicecrafting;

use Illuminate\Support\ServiceProvider;

class DevicecraftingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $rootDir = __DIR__ . '/../../';

        $this->loadMigrationsFrom("${rootDir}/database/migrations");
        $this->loadRoutesFrom("${rootDir}/routes/web.php");
      	$this->loadViewsFrom("${rootDir}/resources/views", 'devicecrafting');

        // Assets
        $this->publishes([
            "${rootDir}/resources/assets/sass" => resource_path('assets/sass')
        ], 'sass');
        // Database
        $this->publishes([
            "${rootDir}/database/factories/" => database_path('factories')
        ], 'factories');
        $this->publishes([
            "${rootDir}/database/seeds/" => database_path('seeds')
        ], 'seeds');
    }
}
