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

        $this->hooks($rootDir);
    }

    /**
     * Set application hooks for specific resources
     */
    private function hooks($rootDir)
    {
        $this->loadMigrationsFrom("${rootDir}/database/migrations");
      	$this->loadViewsFrom("${rootDir}/resources/views", 'devicecrafting');
    }
}
