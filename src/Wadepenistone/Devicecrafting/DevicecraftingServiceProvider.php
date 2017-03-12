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
    }
}
