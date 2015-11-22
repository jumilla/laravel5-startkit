<?php

namespace App\Debug\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $prefix = 'debug';

    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Debug\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        if (config('app.debug')) {
            parent::boot($router);
        }
    }

    /**
     * Define the routes for the addon.
     *
     * @param  \Illuminate\Routing\Router  $router  (injection)
     * @return void
     */
    public function map(Router $router)
    {
        if (config('app.debug')) {
            $router->group(['prefix' => $this->prefix, 'namespace' => $this->namespace], function ($router) {
                require __DIR__.'/../Http/routes.php';
            });
        }
    }
}
