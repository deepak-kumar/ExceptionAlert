<?php 

namespace Bebetter\ExceptionAlert;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    protected $defer = false;

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/exception-alert.php' => config_path('bebetter.exception-alert.php'),
        ]);
        
        $this->app['view']->addNamespace('log-envelope', __DIR__ . '/../resources/views');
        
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('ExceptionAlert', 'Bebetter\ExceptionAlert\Facade');
    } // end boot
    
    public function register()
    {
        config([
            'config/bebetter.exception-alert.php',
        ]);
        
        $this->app['bebetter.exception-alert'] = $this->app->share(function($app) {
            return new ExceptionAlert();
        });
    } // end register
    
}
