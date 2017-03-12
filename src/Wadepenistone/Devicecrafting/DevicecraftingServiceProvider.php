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

        // Include routes
        if (!$this->app->routesAreCached()) {
            require "${rootDir}/routes/web.php";
        }

        // Set view path
      	$this->loadViewsFrom("${rootDir}/resources/views", 'devicecrafting');
    }
}
