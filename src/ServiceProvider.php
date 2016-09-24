<?php

namespace AirHug\Package;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * 服务提供者加是否延迟加载.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        echo __DIR__.'\stubs\routes\routes.php';
//        $this->publishes([
//            __DIR__ . '/config.php' => config_path('airhug.php'),
//        ]);
        file_put_contents(
            app_path('Http/routes.php'),
            file_get_contents(__DIR__ . '/stubs/routes/routes.stub'),
            FILE_APPEND
        );
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * 提供的服务
     *
     * @return array
     */
    public function provides()
    {
        
    }
}
