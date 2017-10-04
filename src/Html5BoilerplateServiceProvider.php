<?php
namespace Ven7ura\Html5Boilerplate;

use Illuminate\Support\ServiceProvider;

class Html5BoilerplateServiceProvider extends ServiceProvider
{
    /**
    * Publish the plugin configuration
    **/
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/h5b.php' => config_path('h5b.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/views' => resource_path('views')
        ], 'views');
    }
}
